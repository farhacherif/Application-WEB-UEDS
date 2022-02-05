<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\User;
use App\Evenement;
use App\Donateur;
use App\Partenaire;
use DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
 /*  public function index()
    {   $users = User::count();
        $evenements = Evenement::count();
        $dons = Donateur::sum('montant');

        return view('admin.index', compact('users','evenements','dons'));
    }*/

    public function usersChartData(){
        $usersChart = User::whereYear('created_at', '=', date("Y"))
        ->get()
        ->groupBy('created_at.month')
        ->map(function($users) {
            return count($users);
        })->toArray();
        //to fill empty months
        return array_values(array_replace(array_fill_keys(range(1, 12), 0),$usersChart));
    }
    public function partenairesChartData(){
        $partenairesChart = Partenaire::whereYear('created_at', '=', date("Y"))
        ->get()
        ->groupBy('created_at.month')
        ->map(function($partenaires) {
            return count($partenaires);
        })->toArray();
        //to fill empty months
        return array_values(array_replace(array_fill_keys(range(1, 12), 0),$partenairesChart));
    }
    public function evenementsChartData(){
        $evenementsChart = Evenement::whereYear('created_at', '=', date("Y"))
        ->get()
        ->groupBy('created_at.month')
        ->map(function($evenements) {
            return count($evenements);
        })->toArray();
        //to fill empty months
        return array_values(array_replace(array_fill_keys(range(1, 12), 0),$evenementsChart));
    }
    public function monthlyDonationsChartData(){
        $donationsChart = Donateur::whereYear('created_at', '=', date("Y"))
        ->get()
        ->groupBy('created_at.month')
        ->map(function($donations) {
            return $donations->sum('montant');
        })->toArray();
        //to fill empty months
        return array_values(array_replace(array_fill_keys(range(1, 12), 0),$donationsChart));
    }
    public function donationsChartData($from, $to){
        if(!$from){
            $from = date('Y-m-01');
            $to  = date('Y-m-t');
        }

        $period = new \DatePeriod( new \DateTime($from), new \DateInterval('P1D'), new \DateTime($to));
        $dbData = [];

        foreach($period as $date){
            $range[$date->format("Y-m-d")] = [$date->format("Y-m-d"), 0];
        }

        $data = DB::table('donateurs')
                  ->select(DB::raw('DATE(created_at) as time'), DB::raw('sum(montant) as total'))
                  ->whereDate('created_at', '>=', date($from).' 00:00:00')
                  ->whereDate('created_at', '<=', date($to).' 00:00:00')
                  ->groupBy('time')
                  ->get();

                  foreach($data as $val){
                    $dbData[$val->time] = [$val->time, (int)$val->total];
                  }

        $data = array_replace($range, $dbData);

        return json_encode(array_values($data));
    }
    public function statistique(){
        $evenements = Evenement::count();
        $userChart = $this->usersChartData();
        $partenaireChart = $this->partenairesChartData();
        $evenementChart = $this->evenementsChartData();
        $monthlyDonationChart = $this->monthlyDonationsChartData();
        $donationChart = $this->donationsChartData(request('from'), request('to'));
        return view('admin.statistique', compact( 'evenements', 'userChart', 'partenaireChart', 'evenementChart', 'monthlyDonationChart', 'donationChart'));
    }
    public function dashboard()
    {   $users = User::count();
        $dons = Donateur::sum('montant');
        $evenements = Evenement::count();
        $partenaires = Partenaire::count();
        $userChart = $this->usersChartData();
        $monthlyDonationChart = $this->monthlyDonationsChartData();
        $donationChart = $this->donationsChartData(request('from'), request('to'));
        $evenementChart = $this->evenementsChartData();
        return view('admin.dashboard', compact('users', 'dons', 'evenements', 'partenaires', 'userChart', 'monthlyDonationChart', 'donationChart', 'evenementChart'));
    }
    public function pourcentage()
    {
        $lastMonthDonations = Donateur::whereMonth(
            'created_at', '=', Carbon::now()->subMonth()->month
        )
        ->count();


        $currentMonthDonations = Donateur::whereMonth(
            'created_at', '=', Carbon::now()->month
        )
        ->count();

        $percentage = round(($lastMonthDonations/$currentMonthDonations) * 100, 2);
        return view('admin.test', compact('percentage'));
    }
    public function profile(){
        return view('admin.profileadmin', array('admin' => Auth::admin()) );
        }

    public function update_avatar(Request $request){
        if ($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save (public_path('/uploads/avatars/'.$filename));
            $admin = Auth::admin();
            $admin->avatar = $filename;
            $admin->save();
                    }
            return view('admin.profileadmin', array('admin' => Auth::admin()) );
    }
    public function valider($id){
        $user = User::find($id);
        $user->status = '1';
        $user->save();
        return redirect(url('/liste'));
    }
    public function liste (){
        $users=User::where('status','=','0')->get();
        return view('admin.utilisateurs.users-list',compact('users'));
    }
    public function listeall (){
        $users=User::where('status','=','1')->get();
        return view('admin.utilisateurs.list',compact('users'));
    }
    public function desactiver($id){
        $user = User::find($id);
        $user->status = '0';
        $user->save();
        return redirect(url('/liste'));
    }
}
