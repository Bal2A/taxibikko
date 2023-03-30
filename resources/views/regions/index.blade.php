@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
                <h1 class="mb-0">Regions</h1>
                <a href="{{ route('regions.create') }}" class="btn btn-primary">Ajouter Region</a>
        </div>
       
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom de la région</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($regions as $region)
                    <tr>
                        <td>{{ $region->id }}</td>
                        <td>{{ $region->nomRegion }}</td>
                        <td>
                            <a href="{{ route('regions.show', $region->id) }}" class="btn btn-primary">Voir</a>
                            <a href="{{ route('regions.edit', $region->id) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('regions.destroy', $region->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
