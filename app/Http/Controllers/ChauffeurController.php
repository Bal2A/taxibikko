<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use App\Models\Region;
use Illuminate\Http\Request;

class ChauffeurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chauffeur = Chauffeur::with('region')->get();
        return view('chauffeur.index', compact('chauffeur'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $regions = Region::all();
        return view('chauffeur.create', compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $chauffeur = new Chauffeur;
        $chauffeur->nomChauff = $request->nomChauff;
        $chauffeur->prenomChauff = $request->prenomChauff;
        $chauffeur->adresseChauff = $request->adresseChauff;
        $chauffeur->emailChauff = $request->emailChauff;
        $chauffeur->region_id = $request->region_id;
        $chauffeur->save();

        return redirect()->route('chauffeur.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Chauffeur  $chauffeur)
    {
        $chauffeur1 = $chauffeur;
        return view('chauffeur.show', compact('chauffeur','chauffeur1'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chauffeur $chauffeur)
    {
        $regions = Region::all();

        return view('chauffeur.edit', compact('chauffeur', 'regions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chauffeur  $chauffeur)
    {

        $chauffeur->nomChauff = $request->nomChauff;
        $chauffeur->prenomChauff = $request->prenomChauff;
        $chauffeur->adresseChauff = $request->adresseChauff;
        $chauffeur->emailChauff = $request->emailChauff;
        $chauffeur->region_id = $request->region_id;
        $chauffeur->save();

        //return redirect()->route('chauffeur.index', $chauffeur->id)->with('success', 'Chauffeur modifié avec succès');
        return redirect()->route('chauffeur.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chauffeur  $chauffeur)
    {
        $chauffeur->delete();
        return redirect()->route('chauffeur.index');
    }
}
