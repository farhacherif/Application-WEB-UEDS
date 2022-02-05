<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Evenement;

class ImageController extends Controller
   
{

public function create()
{
	$evenements = Evenement::all();

	return view('admin/images/Create',compact("evenements"));
}


public function store(Request $request) //dima haka
{
	$image = new Image();
	$image->evenement_id=$request->evenement_id;


    $imageName=time().'.'.$request->image->getClientOriginalExtension();
	$image->image = $imageName;
	$request->image->move(public_path()."/images/",$imageName);


	$image->save();

	return redirect('/images/create')
	-> with("success","image ajouté avec succés");
}

public function show($id = null)
{
	if($id != null)
        $images=Evenement::find($id)->images();

       // $produits=Categoriie::find($id)->produits; //ken aandich pagination
    else  
        $images = Image::all();//maaneha select *
        $evenements=Evenement::all();
        
	return view("admin/images/show", compact("evenements","images"));
}

public function index()
{
	$images = Image::all();

	return view('admin/images/index',compact("images"));
}

public function delete($id)
{
$image=Image::find($id);
$image->delete();

	return redirect()->back()
	-> with("success","image supprimé avec succés");

}



}

