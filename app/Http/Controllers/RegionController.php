<?php

namespace App\Http\Controllers;
use App\Http\Requests\TypeRequest;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    //
    public function index()
    {
        $regions = Region::all();
        return view('regions.index', compact('regions'));
    }
    public function create()
    {
        return view('regions.create');
    }
    public function store(Request $request)
    {
        $region = new Region;
        $region->nomRegion = $request->input('nomRegion');
        $region->save();
        return redirect()->route('regions.index')->with('success', 'La région a été créée avec succès.');
    }
    public function show($id)
    {
        $region = Region::find($id);
        return view('regions.show', compact('region'));
    }

    public function edit($id)
    {
        $region = Region::find($id);
        return view('regions.edit', compact('region'));
    }

    public function update(Request $request, $id)
    {
        $region = Region::find($id);
        $region->nomRegion = $request->input('nomRegion');
        $region->save();
        return redirect()->route('regions.index')->with('success', 'La région a été mise à jour avec succès.');
    }

    public function destroy($id)
    {
        $region = Region::find($id);
        $region->delete();
        return redirect()->route('regions.index')->with('success', 'La région a été supprimée avec succès.');
    }
}
