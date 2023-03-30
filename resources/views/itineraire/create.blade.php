@extends('layouts.app')

@section('content')
<div class="container">
<div class="d-flex justify-content-between align-items-center">
            <h1 class="mb-0"></h1>
            <a href="{{ route('itineraire.index') }}" class="btn btn-primary">Retour</a>
        </div>
    <div class="card">
        <div class="card-header">
            Créer un nouvel itinéraire
        </div>
        <div class="card-body">
            <form action="{{ route('itineraire.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomIte">Nom de l'itinéraire :</label>
                    <input type="text" name="nomIte" id="nomIte" class="form-control" required>
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
                <a href="{{ route('regions.create') }}" class="btn btn-secondary">Créer une nouvelle région</a>
            </form>
        </div>
    </div>
</div>

@endsection
