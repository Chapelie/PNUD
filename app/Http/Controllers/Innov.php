<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class Innov extends Controller
{
    public function index()
    {
        $innovateursJson = Storage::disk('public')->get('innovateurs.json');
        $innovateurs = json_decode($innovateursJson, true);

        return view('home', compact('innovateurs'));
    }

    /**
     * Affiche le formulaire pour ajouter un nouvel innovateur.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('innovateurs.create');
    }

    /**
     * Stocke un nouvel innovateur dans le fichier JSON.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $innovateursJson = Storage::disk('public')->get('innovateurs.json');
        $innovateurs = json_decode($innovateursJson, true);

        $nouvelInnovateur = $request->all();
        $innovateurs['innovateurs'][] = $nouvelInnovateur;

        Storage::disk('public')->put('innovateurs.json', json_encode($innovateurs));

        return redirect()->route('innovateurs.index')
                         ->with('success', 'Innovateur ajouté avec succès.');
    }
}

