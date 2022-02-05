<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partenaire;
use App\Evenement;
use App\Appel;
use App\Image;
use App\Like;


use Carbon\Carbon;
class PartenaireController extends Controller
{
    public function create()
    {
        return view('admin.partenaires.create');
    }
    public function partenaires()
    {
        $partenaires=Partenaire::where('status','=','1')->get();
        $now = new Carbon();
        $evenement = Evenement::select('libelle', 'date')->where('date', '>', $now)->first();
        return view('devenir_partenaire.nos_partenaires',compact("evenement","partenaires"));
    }
    public function create2()
    {
        $now = new Carbon();
        $evenement = Evenement::select('libelle', 'date')->where('date', '>', $now)->first();

        return view('devenir_partenaire.partenaire', compact("evenement", "now"))->with('success',"Merci pour votre demande. Nous vous contactons à ce propos dans les brefs délais.");
    }

            public function show()
            {
                $partenaires=Partenaire::where('status','=','1')->get();
                return view('admin.partenaires.list',compact('partenaires'));
            }

    protected function store(Request $request)
            {
                $this->validate($request,['nom'=>'required|min:3', 'email'=>'required', 'adresse'=>'required', 'description'=>'required|min:3']);

                $partenaire = new Partenaire();
                $partenaire->nom = $request->nom;
                $partenaire->email = $request->email;
                $partenaire->tel =  $request->tel;
                $partenaire->code =  $request->code;
                $partenaire->adresse = $request->adresse;
                $partenaire->status = 1;

                $partenaire->description =  $request->description;

    $imageName=time().'.'.$request->image->getClientOriginalExtension();
	$partenaire->image = $imageName;
	$request->image->move(public_path()."/images/",$imageName);


                $partenaire->save();

                $partenaires=Partenaire::where('status','=','1')->get();
                $request->session()->flash('alert-success', 'Votre partenaire a été bien enregistré.');
            return view('admin.partenaires.list', compact('partenaires'));
             }
             protected function store2(Request $request)
            {

                $this->validate($request,['nom'=>'required|min:3', 'email'=>'required', 'adresse'=>'required', 'description'=>'required|min:3']);

                $partenaire = new Partenaire();
                $partenaire->nom = $request->nom;
                $partenaire->email = $request->email;
                $partenaire->tel =  $request->tel;
                $partenaire->code =  $request->code;
                $partenaire->adresse = $request->adresse;
                $partenaire->status = 0;

                $partenaire->description =  $request->description;

    $imageName=time().'.'.$request->image->getClientOriginalExtension();
	$partenaire->image = $imageName;
	$request->image->move(public_path()."/images/",$imageName);


                $partenaire->save();

                $now = new Carbon();
                $request->session()->flash('alert-success', 'Votre demande de partenariat a été bien enregistrée. Nous vous contacterons dans les brefs délais.');
                $evenement = Evenement::select('libelle', 'date')->where('date', '>', $now)->first();


            return view('devenir_partenaire.partenaire', compact("evenement", "now"));

             }

             public function desactiver($id){
                $partenaire = Partenaire::find($id);
                $partenaire->status = '0';
                $partenaire->save();
                return redirect(url('/partenaires/list'));
            }
            public function valider($id){
                $partenaire = Partenaire::find($id);
                $partenaire->status = '1';
                $partenaire->save();
                return redirect(url('/partenaires/list'));
            }
            public function listdesac (){
                $partenaires=Partenaire::where('status','=','0')->get();
                return view('admin.partenaires.list_desac',compact('partenaires'));
            }
            public function edit($id)
            {
               $partenaire = Partenaire::FindOrFail($id);
                return view('admin/partenaires/edit', compact('partenaire'));
            }
            public function update(Request $request, $id)
            {

            $partenaire = Partenaire::find($id);
            $partenaire->update($request->all());
            if ($request->image != null) {
                    $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                    $partenaire->image = $imageName;
                    $request->image->move(public_path() . "/images/", $imageName);
                }
            $partenaire->save();


            return redirect(url('/partenaires/list'));
            }

            public function destroy($id)
            {
                Partenaire::destroy($id);
                $partenaires=Partenaire::all();
                return view('admin.partenaires.list_desac', compact('partenaires'));
            }
}
