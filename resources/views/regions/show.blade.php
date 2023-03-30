@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center">
                    <h1 class="mb-0">Itineraires</h1>
                    <a href="{{ route('regions.index') }}" class="btn btn-primary">Retour</a>
</div>
    <div class="container">
        <h1>{{ $region->nomRegion }}</h1>
        <p><strong>ID:</strong> {{ $region->id }}</p>
        <p><strong>Description:</strong> {{ $region->description }}</p>
        <p><a href="{{ route('regions.edit', ['region' => $region->id]) }}">Modifier</a></p>
        <form action="{{ route('regions.destroy', ['region' => $region->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Supprimer</button>
        </form>
    </div>
@endsection
