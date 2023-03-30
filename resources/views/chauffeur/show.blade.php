@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center">
                    <h1 class="mb-0">Chauffeur</h1>
</div>
    <div class="container">
        <h3>{{ $chauffeur->nomChauff }}</h3>
        <h3>{{ $chauffeur->prenomChauff }}</h3>
        <h3>{{ $chauffeur->adresseChauff }}</h3>
        <h3>{{ $chauffeur->emailChauff }}</h3>

        <p><strong>ID:</strong> {{ $chauffeur->id }}</p>
        <p><strong>Description:</strong> {{ $chauffeur->description }}</p>
        <p><strong>Region:</strong> {{ $chauffeur->region->nomRegion }}</p>
        <p><a href="{{ route('chauffeur.edit', ['chauffeur' => $chauffeur->id]) }}">Modifier</a></p>
        <form action="{{ route('chauffeur.destroy', ['chauffeur' => $chauffeur->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Supprimer</button>
        </form>
    </div>
@endsection

