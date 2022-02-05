<?php

namespace App\Http\Controllers;
use App\Donateur;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DonateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donateurs/create');
    }

    public function create2()
    {
        return view('utilisateurs/faire_don');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['nom'=>'required|min:3','adresse'=>'required|min:5']);
        $donateur = new Donateur();

        $donateur->montant = $request->montant;
    //    $donateur->type = $request->type;
        $donateur->nom = $request->nom;
        $donateur->prenom = $request->prenom;
        $donateur->pays = $request->pays;
        $donateur->adresse = $request->adresse;
        $donateur->mail = $request->mail;
        $donateur->tel=$request->tel;
        $donateur->user_id='0';
        $donateur->save();





        return redirect('/donateurs/create')
            -> with("success","evenement ajouté avec succés");

    }
    public function store2(Request $request)
    {


        $donateur = new Donateur();

        $donateur->montant = $request->montant;

      //  $donateur->type = $request->type;
        $donateur->nom = Auth::user()->name;
        $donateur->prenom = Auth::user()->name;
        $donateur->pays = Auth::user()->pays;
        $donateur->adresse = Auth::user()->ville;
        $donateur->mail = Auth::user()->email;
        $donateur->tel= Auth::user()->tel;
        $donateur->user_id= Auth::user()->id;
        $donateur->save();


        $request->session()->flash('alert-danger', 'Nous vous remercions de tout notre cœur et ne manquerons pas de vous communiquer le bilan annuel que nous adressons à tous nos généreux donateurs.
        Encore merci pour votre générosité.');


        return redirect('/utilisateurs/faire_don');



    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
