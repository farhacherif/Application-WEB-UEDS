<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Activite;
use Auth;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use App\Evenement;
use App\Donateur;
use App\Evenement_User;
use App\User;


class UserController extends Controller
{


    public function don(){

        $evenements = Evenement::all();


    return view('utilisateurs/don', compact("evenements"));

}
public function evenements(){
    $user = Auth::user();
    $evenements = Evenement::all();
    $now = new Carbon();
    $evenement_user=Evenement_User::where('user_id', Auth::user()->id)->get();

return view('utilisateurs/mes_evenements', compact("evenement_user","evenements","now"));

}
public function mes_dons(){
    $user = Auth::user();

    $now = new Carbon();

    $donateurs=Donateur::where('user_id', Auth::user()->id)->get();


return view('utilisateurs.don', compact("donateurs","now"));

}

public function profil(){
    $activites = Activite::all();

 return view('utilisateurs/profil', array('user' => Auth::user(),
 'activites' => Activite::all()));
 }
 public function updateprofil(Request $request) {
     $user = Auth::user();
     $user->name = $request->name;
     $user->date = $request->date;
     $user->cadre = $request->cadre;
     $user->tel = $request->tel;
     $user->presentation = $request->presentation;
     $user->perimetre = $request->perimetre;
     $user->activite_id = $request->activite_id;
     $user->email = $request->email;
     $user->password = Hash::make($request->password);

     $user->save();
     return view('utilisateurs/profil', array('user' => Auth::user()));
                 }
    public function profile(){
        if(\Auth::user()->is_activated== '0'){
            return view('home_validate');}
        else{
        return view('utilisateurs/profile', array('user' => Auth::user()) );
        }
    }
        public function edit(){
               $activites = Activite::all();

            return view('utilisateurs/editprofil', array('user' => Auth::user(),
            'activites' => Activite::all()));
            }
            public function update_profil(Request $request) {
                $user = Auth::user();
                $user->name = $request->name;
                $user->date = $request->date;
                $user->cadre = $request->cadre;
                $user->tel = $request->tel;
                $user->presentation = $request->presentation;
                $user->perimetre = $request->perimetre;
                $user->activite_id = $request->activite_id;
                $user->email = $request->email;
                $user->password = Hash::make($request->password);

                $user->save();
                return redirect('/profile');
                            }

    public function update_avatar(Request $request){
        if ($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/'.$filename));
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return redirect('/profile');
    }
    public function showprofile($id)
    {
        $user =User::find($id);
//        dd($users);

        return view('admin.utilisateurs.view_user',['user'=>$user]);
    }
    public function create()
    {
        return view('admin.utilisateurs.adduser');
    }

    public function show()
    {

$users = User::all();

return view('admin.utilisateurs.list', compact('users'));
    }
    protected function store(Request $request)
            {
                $this->validate($request,['name'=>'required|min:3']);

                $user = new User();
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = Hash::make(123456);
                $user->status = 1;

                $user->save();
                $users = User::all();

return view('admin.utilisateurs.list', compact('users'));
  }
    public function destroy($id)
    {
        User::destroy($id);
        $users=User::all();
        return view('admin.utilisateurs.list', compact('users'));
    }
    public function logout () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/accueil');
    }

}
