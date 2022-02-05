<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appel;


class AppelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appels = Appel::all();
        return view ('appels.index', compact('appels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/appels/Create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['libelle'=>'required|min:3','description'=>'required|min:5']);
        $appel = new Appel();
        $appel->libelle = $request->libelle;
        $appel->lieu= $request->lieu;
        $appel->description = $request->description;
        $imageName=time().'.'.$request->image->getClientOriginalExtension();
        $appel->image = $imageName;
        $request->image->move(public_path()."/images/",$imageName);




        $appel->save();

        return redirect('/admin/appels/list')
            -> with("success","appel de solidarité ajouté avec succés");


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appel = Appel::FindOrFail($id);
        return view('admin.appels.list', compact('appels'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appel = Appel::FindOrFail($id);
        return view('admin.appels.edit', compact('appel'));

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

        /*  $this->validate($request,['libelle'=>'required|min:3','description'=>'required|min:5']);
            Evenement::update(['libelle' => $request->libelle,'date' => $request->date, 'libelle' => $request->lieu , 'description' => $request->description]);*/
// Evenement::whereId($id)->update($request->all());

        // $evenement = request()->all();
        //  Evenement::where('id', '=', $id)->update($evenement);
        //  return redirect()->to('categorias');
        $appel = Appel::find($id);


        $appel->update($request->all());

        $appel=Appel::find($id);

        $appel->libelle = $request->libelle;
        $appel->lieu = $request->lieu;
        $appel->description = $request->description;

        if($request->image != null)
        {
            $imageName=time().'.'.$request->image->getClientOriginalExtension();
            $appel->image = $imageName;
            $request->image->move(public_path()."/images/",$imageName);
        }


        $appel->save();

        return redirect(url('/admin/appels/list'));
    }

    public function list()
    {
        $appels=Appel::all();
        return view('admin.appels.list',compact('appels'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Appel::destroy($id);
        return redirect(url('/admin/appels/list'));
    }
}
