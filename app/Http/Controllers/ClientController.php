<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Itineraire;
use App\Models\Region;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::with('region')->get();
        
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
        $regions = Region::all();
        $itineraires = Itineraire::all();

        return view('clients.create', compact('regions','itineraires'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   

        $client = new Client;
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->adresse = $request->adresse;
        $client->email = $request->email;
        $client->region_id = $request->region;
        $client->save();
        
        return redirect()->route('clients.index')->with('success', 'Le Client a été créée avec succès.');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {    
         $client1=$client;
        return view('clients.show', compact('client1'));   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        $regions = Region::all();
        $region = $client->region;

        return view('clients.edit', compact('client','regions','region'));
    }
   
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    
        $client = Client::find($id);
        $client->nom = $request->input('nom');
        $client->prenom = $request->input('prenom');
        $client->adresse = $request->input('adresse');
        $client->email = $request->input('email');
        $client->region_id = $request->input('region_id');
        $client->save();

    
        return redirect()->route('clients.show', $client->id)->with('success', 'Client modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Client::find($id);
    
        if($client){
            $client->delete();
            return redirect()->route('clients.index')->with('success', 'Client supprimé avec succès.');
        }
        else{
            return redirect()->route('clients.index')->with('error', 'Client introuvable.');
        }
    }

}
