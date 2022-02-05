<?php

namespace App\Http\Controllers;

use Auth;
use App\Evenement;
use App\Donateur;
use Carbon\Carbon;
use App\Evenement_User;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  if(\Auth::user()->is_activated== '0'){
        return view('home_validate');}
    else
    {
        $user =Auth::user();
        $evenements = Evenement::all();
        $evenement_user=Evenement_User::where('user_id', Auth::user()->id)->first();
        $donateurs=Donateur::where('user_id', Auth::user()->id)->first();
   //     $donateurs = DB::table('donateurs')
                   //  ->where( 'user_id', Auth::user()->id);

        if (!$evenement_user)
        {

            $evenement_count = '0';

        }
        else
        {

       foreach($evenements as $evenement)
       {
if ($evenement_user->evenement_id==$evenement->id)

        $evenement_count = Evenement::where('id','=', $evenement_user->evenement_id)->count();


       }

    }








    if (!$donateurs)

    {

        $donateur_count = '0';

    }
    else
    {

   foreach($donateurs as $donateur)
   {
if ($donateur ==$user->id)
$dons = Donateur::sum('montant');
    $donateur_count = Donateur::where('user_id','=', $user->id)->sum('montant');

   }

}
}

        $now = new Carbon();
        Carbon::setLocale('fr');
        $date= $user->created_at->diffForHumans();
    return view('utilisateurs/dashboard', compact("evenements","now","user","date","evenement_count","donateur_count"));
    }
}




