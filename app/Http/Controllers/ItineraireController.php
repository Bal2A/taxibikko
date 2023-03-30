<?php

namespace App\Http\Controllers;

use App\Models\Itineraire;
use App\Models\Region;
use Illuminate\Http\Request;

class ItineraireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $itineraire = Itineraire::with('region')->get();
        return view('itineraire.index', compact('itineraire'));
    }

    public function create()
    {
        $regions = Region::all();
        return view('itineraire.create', compact('regions'));
    }

    public function store(Request $request)
    {
        $itineraire = new Itineraire;
        $itineraire->nomIte = $request->nomIte;
        $itineraire->tarif = $request->tarif;
        $itineraire->region_id = $request->region_id;
        $itineraire->save();

        return redirect()->route('itineraire.index');
    }

    public function show(Itineraire $itineraire)
    {
        return view('itineraire.show', compact('itineraire'));
    }

    public function edit(Itineraire $itineraire)
    {
        $regions = Region::all();
        return view('itineraire.edit', compact('itineraire', 'regions'));
    }

    public function update(Request $request, Itineraire $itineraire)
    {
        $itineraire->nomIte = $request->nomIte;
        $itineraire->tarif = $request->tarif;
        $itineraire->region_id = $request->region_id;
        $itineraire->save();

        return redirect()->route('itineraire.index');
    }

    public function destroy(Itineraire $itineraire)
    {
        $itineraire->delete();
        return redirect()->route('itineraire.index');
    }
}
