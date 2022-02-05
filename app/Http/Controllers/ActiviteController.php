<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activite;
class ActiviteController extends Controller
{
    public function create()
    {
        return view('admin.activites.create');
    }
    public function store(Request $request)
            { 
                $this->validate($request,['nom'=>'required|min:3']);
                $activite = new Activite();  

                $activite->nom = $request->nom;
                $activite->save();
                $activites = Activite::all();

            return view('admin.activites.list', compact('activites'));  
             }
             
             public function show()
             {
                 $activites=Activite::all();
                 return view('admin.activites.list',compact('activites'));
             }
            
            public function delete($id)
            {
            $activite=Activite::find($id);
            $activite->delete();

                return redirect()->back()
                -> with("success","activite supprimé avec succés");

}
}
