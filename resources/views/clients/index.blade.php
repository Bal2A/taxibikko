@extends('layouts.app')

@section('content')
<div class="container">                  
    <h1>Clients</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Région</th>
                <th>Tarif</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
            <tr>
                <td>{{ $client->nom }}</td>
                <td>{{ $client->prenom }}</td>
                <td>{{ $client->adresse }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->region->nomRegion }}</td>
                <td>{{ $client->tarif }}</td>
                <td>
                    <a href="{{ route('clients.show', $client->id) }}" class="btn btn-primary">Voir</a>
                    <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-warning">Modifier</a>
                    <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('clients.create') }}" class="btn btn-success">Ajouter un client</a>
</div>
@endsection
