<?php

namespace App\Http\Controllers;

use App\Like;
use App\Appel;
use App\Image;
use App\Presse;
use App\Evenement;
use App\User;
use App\Partenaire;
use App\Donateur;


use Carbon\Carbon;
use Illuminate\Http\Request;

class AccueilController extends Controller
{

    public function home()
    {
        $userscount = User::count();
        $donscount = Donateur::sum('montant');
        $evenementscount = Evenement::count();
        $partenairescount = Partenaire::count();
        $evenements = Evenement::all();
        $appels = Appel::all();
        $images = Image::all();
        $presses=Presse::all();
        $now = new Carbon();
        Carbon::setLocale('fr');


        return view('accueil', compact("evenements", "images", "appels", "now", "presses", "userscount", "donscount", "evenementscount", "partenairescount"));

    }

    public function header()
    {
        $now = new Carbon();
        $evenement = Evenement::select('libelle', 'date')->where('date', '>', $now)->first();

        return view('accueil', compact("evenement", "now"));
    }

    public function contact()
    {

        $now = new Carbon();
        $evenement = Evenement::select('libelle', 'date')->where('date', '>', $now)->first();

        return view('contact', compact("evenement", "now"));
    }

    public function realisation()
    {

        $now = new Carbon();
        $evenement = Evenement::select('libelle', 'date')->where('date', '>', $now)->first();

        return view('actions/realisation', compact("evenement", "now"));
    }

    public function presentation()
    {

        $now = new Carbon();
        $evenement = Evenement::select('libelle', 'date')->where('date', '>', $now)->first();

        return view('ueds/presentation', compact("evenement", "now"));
    }

    public function evenement()
    {

        $now = new Carbon();
        $evenements = Evenement::all();

        $evenement = Evenement::select('libelle', 'date')->where('date', '>', $now)->first();


        return view('actions/evenements', compact("evenement", "now", "evenements"));

    }

    public function actualite()
    {

        $now = new Carbon();
        $evenements = Evenement::all();

        $evenement = Evenement::select('libelle', 'date')->where('date', '>', $now)->first();


        return view('evenements/actus', compact("now", "evenements", "evenement"));
    }


    public function appel()
    {

        $now = new Carbon();
        $appels = Appel::all();

        $evenement = Evenement::select('libelle', 'date')->where('date', '>', $now)->first();


        return view('actions/appels', compact("evenement", "now", "appels"));

    }
    public function presse()
    {

        $now = new Carbon();
        $presses = Presse::all();

        $evenement = Evenement::select('libelle', 'date')->where('date', '>', $now)->first();


        return view('admin.press.show', compact("evenement", "now", "presses"));
    }

    public function calendar()
    {
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

        $now = new Carbon();
        $evenement = Evenement::select('libelle', 'date')->where('date', '>', $now)->first();

        return view('actions/calendar', compact("evenement", "now", "events"));
    }

    public function image($id = null)
    {

        if ($id != null)
            $images = Evenement::find($id)->images()->paginate(4);

        else
            $images = Image::paginate(12);
        $evenements = Evenement::all();

        $now = new Carbon();
        return view('galerie', compact("evenements", "images", "now"));
    }
    public function galerie($id = null)
    {

        if ($id != null)
            $images = Evenement::find($id)->images()->paginate(4);

        else
            $images = Image::paginate(12);
        $evenements = Evenement::all();

        $now = new Carbon();
        return view('galerie', compact("evenements", "images", "now"));
    }


    public function search(Request $request)
    {
        $q = $request->q;
        $search = Evenement::where("libelle", "like", "%" . $q . "%")
            ->orWhere("description", "like", "%" . $q . "%")->get();
        $appels = Appel::all();
        $images = Image::all()->first();
        $now = new Carbon();
        $evenement = Evenement::select('libelle', 'date')->where('date', '>', $now)->first();
        return view("search", compact("appels", "images", "evenement", "search"));
    }



}
