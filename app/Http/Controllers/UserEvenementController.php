<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Evenement;
use Carbon\Carbon;
use App\Evenement_User;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Don_User;
use App\Donateur;

class UserEvenementController extends Controller
{
    public function create($id)
    {
        $evenement = Evenement::FindOrFail($id);
        return view('utilisateurs/participer',compact('evenement'));
    }
    public function list()
    {
        //$posts = Post::orderBy('created_at', 'desc')->get();
        $evenements = Evenement::orderBy('created_at', 'desc')->get();
        $users = User::all();
        $evenement_user=Evenement_User::where('status','=','0')->get();

        return view('admin/participation/list',compact('evenement_user','evenements','users'));
    }
    public function destroy($id)
    {
        $evenements = Evenement::orderBy('created_at', 'desc')->get();
        $users = User::all();
        Evenement_User::destroy($id);
        $Evenement_Users=Evenement_User::all();
        return view('admin/participation/list', compact('Evenement_Users','evenements','users'));
    }
    public function valide()
    {
        //$posts = Post::orderBy('created_at', 'desc')->get();
        $evenements = Evenement::orderBy('created_at', 'desc')->get();
        $users = User::all();
        $evenement_user=Evenement_User::where('status','=','1')->get();

        return view('admin/participation/list_valide',compact('evenement_user','evenements','users'));
    }
    public function activer($id)
    {
        $evenement_user = evenement_user::find($id);
        $evenement_user->status = '1';
        $evenement_user->save();
        return redirect(url('admin/participation/list'));
}
            public function store(Request $request,$id)
            {
                $evenements = Evenement::all();

                $evenement = Evenement::FindOrFail($id);
            $event_user = DB::table('Evenement__user')
            ->where('evenement_id', $evenement->id)
                ->where('user_id', Auth::user()->id)->first();


                if (!$event_user )
                {
                    $evenement_user = new Evenement_User();
                $evenement_user->user_id = Auth::user()->id;
                $evenement_user->evenement_id = $evenement->id;
                $evenement_user->status = '0';
                    $evenement_user->save();
        }
            $evenements = Evenement::all();

            $evenement = Evenement::FindOrFail($id);
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
            $now = new Carbon();
                $request->session()->flash('alert-success', 'Votre demande de participation a été enregistrée avec succés. Restez connecté');
                Carbon::setLocale('fr');
                $date= $user->created_at->diffForHumans();


                return view('utilisateurs/dashboard', compact('evenement','evenements',"now","user","date","evenement_count","donateur_count"));

                }
}

