<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evenement;
use Notification;
use App\Notifications\NewEvenement;
use App\User;
use App\Image;
use Illuminate\Support\Facades\Auth;

class EvenementController extends Controller
{
    public function liste()
    {
        $evenements = Evenement::all();
return view ('evenements.index', compact('evenements'));
    }
    public function listeevents()
    {
        $evenements = Evenement::all();
return view ('evenements.listeevent', compact('evenements'));
    }
    public function index()
    {    $user = User::find(Auth::id());
        $evenements = Evenement::where('activite_id', '=', $user->activite_id)->get();

        return view ('evenements.indexactiv', compact('evenements'));
    }

    public function calendar() {
        $evenements = Evenement::all();
             $events = [];
            foreach ($evenements as $evenement) {
                $events[] = array(
                    'title' => $evenement['libelle'] . "(" . $evenement['lieu'] . ")",
                    'start' => $evenement['date'],
                    'backgroundColor' => '#FE485B',
                    'color' => '#FE485B'
                );
                  }
                  return view ('evenements.calendar', compact('events'));
                }

                public function create()
                {
                    return view('evenements.create');
                }

                public function store(Request $request)
                {
                    $this->validate($request,['libelle'=>'required|min:3','description'=>'required|min:5']);
                    $evenement = new Evenement();
                $evenement->libelle = $request->libelle;
                $evenement->date= $request->date;
                $evenement->lieu= $request->lieu;
                $evenement->description = $request->description;
                $imageName=time().'.'.$request->image->getClientOriginalExtension();
                $evenement->image = $imageName;
                $request->image->move(public_path()."/images/",$imageName);
                $evenement->save();
                $users = User::all();
                foreach ($users as $user){
                Notification::route('mail',$user->email)->notify(new NewEvenement($evenement));
                }


                $evenements = Evenement::all();
                return view('evenements.index', compact('evenements'));

                }
                public function show($id)
                {
                    $evenement = Evenement::FindOrFail($id);
                    return view('evenements.show', compact('evenement'));
                }

                public function edit($id)
                {
                   $evenement = Evenement::FindOrFail($id);
                    return view('evenements.edit', compact('evenement'));
                }
                public function show2($id)
                {
                    $images = Image::all();

                    $evenement = Evenement::FindOrFail($id);
                    return view('actions.show', compact('evenement','images'));
                }

                public function update(Request $request, $id)
                {
                $evenement = Evenement::find($id);

                $evenement->update($request->all());
                if ($request->image != null) {
                        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                        $evenement->image = $imageName;
                        $request->image->move(public_path() . "/images/", $imageName);
                    }
                $evenement->save();


                return redirect()->route('evenements.list');
                }


                public function delete($id)
                {
                $evenement=Evenement::find($id);
                $evenement->delete();

                    return redirect()->back()
                    -> with("success","evenement supprimé avec succés");

                }
}
