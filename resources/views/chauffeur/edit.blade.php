@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
           Itinéraire "{{ $chauffeur->nomChauff }}"
        </div>
        <div class="card-body">
            <form action="{{ route('chauffeur.update', $chauffeur) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nomChauff">Nom Chauffeur :</label>
                    <input type="text" name="nomChauff" id="nomChauff" class="form-control" value="{{ $chauffeur->nomChauff }}" required>
                </div>
                <div class="form-group">
                    <label for="prenomChauff">Prenom Chauffeur :</label>
                    <input type="text" name="prenomChauff" id="prenomChauff" class="form-control" value="{{ $chauffeur->prenomChauff }}" required>
                </div>
                <div class="form-group">
                    <label for="adresseChauff">Adresse Chauffeur :</label>
                    <input type="text" name="adresseChauff" id="adresseChauff" class="form-control" value="{{ $chauffeur->adresseChauff }}" required>
                </div>
                <div class="form-group">
                    <label for="emailChauff">E-mail Chauffeur :</label>
                    <input type="email" name="emailChauff" id="emailChauff" class="form-control" value="{{ $chauffeur->adresseChauff }}" required>
                </div>
                <div class="form-group">
                    <label for="tarif">Tarif :</label>
                    <input type="number" name="tarif" id="tarif" class="form-control" value="{{ $chauffeur->tarif }}" required>
                </div>
                <div class="form-group">
                    <label for="region_id">Région :</label>
                    <select name="region_id" id="region_id" class="form-control" required>
                        @foreach($regions as $region)
                            <option value="{{ $region->id }}" @if($chauffeur->region->id == $region->id) selected @endif>{{ $region->nomRegion }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div>
    </div>
</div>
@endsection
