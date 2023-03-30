@extends('layouts.app')

@section('content')
<div class="container">
<div class="d-flex justify-content-between align-items-center">
            <h1 class="mb-0"></h1>
            <a href="{{ route('chauffeur.index') }}" class="btn btn-primary">Retour</a>
        </div>
    <div class="card">
        <div class="card-header">
            Créer un nouvel Chauffeur
        </div>
        <div class="card-body">
            <form action="{{ route('chauffeur.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomChauff">Nom du chauffeur:</label>
                    <input type="text" name="nomChauff" id="nomChauff" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="prenomChauff">PreNom du chauffeur :</label>
                    <input type="text" name="prenomChauff" id="prenomChauff" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="adresseChauff">Addrese du chauffeur :</label>
                    <input type="text" name="adresseChauff" id="adresseChauff" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="emailChauff">E-mail du chauffeur :</label>
                    <input type="email" name="emailChauff" id="emailChauff" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tarif">Tarif :</label>
                    <input type="number" name="tarif" min = "0"  id="tarif" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="region_id">Région :</label>
                    <select name="region_id" id="region_id" class="form-control" required>
                        @foreach($regions as $region)
                            <option value="{{ $region->id }}">{{ $region->nomRegion }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Créer</button>
        
            </form>
        </div>
    </div>
</div>

@endsection
