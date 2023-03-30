@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center">
                    <h1 class="mb-0">Itineraires</h1>
                    <a href="{{ route('itineraire.index') }}" class="btn btn-primary">Retour</a>
</div>
<h1>{{ $itineraire->nomIte }}</h1>
<p><strong>Tarif:</strong> {{ $itineraire->tarif }}</p>
<p><strong>Region:</strong> {{ $itineraire->region->nomRegion }}</p>
<a href="{{ route('itineraire.edit', $itineraire->id) }}" class="btn btn-primary">Modifier</a>
<form action="{{ route('itineraire.destroy', $itineraire->id) }}" method="POST" style="display: inline-block">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Supprimer</button>
</form>
@endsection