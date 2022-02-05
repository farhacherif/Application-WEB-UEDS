<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presse;

class PresseController extends Controller
{
    public function list()
    {
        $presses = Presse::all();
        return view('admin.press.list', compact('presses'));
    }
    public function create()
    {
        return view('admin/press/create');
    }
    public function store(Request $request)
    {
        $this->validate($request, ['nom' => 'required|min:3']);
        $presse = new Presse();
        $presse->nom = $request->nom;
        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $presse->image = $imageName;
        $request->image->move(public_path() . "/images/", $imageName);
        $presse->save();
        return redirect('admin/presses/list')
            ->with("success", "presse ajouté avec succés");
    }
    public function edit($id)
    {
        $presse = Presse::find($id);
        return view('admin.press.edit', compact('presse'));
    }

    public function update(Request $request, $id)
    {
        $presse = Presse::find($id);
        $presse->update($request->all());
        if ($request->image != null) {
                $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                $presse->image = $imageName;
                $request->image->move(public_path() . "/images/", $imageName);
            }
        $presse->save();

        return redirect()->route('admin.presses.list');
    }

    public function delete($id)
    {
        $presse = Presse::find($id);
        $presse->delete();
        return redirect()->back()
            ->with("success", "Presse supprimé avec succés");
    }
}
