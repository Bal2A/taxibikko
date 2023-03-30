@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="mb-0">Itineraires</h1>
                    <a href="{{ route('chauffeur.create') }}" class="btn btn-primary">Ajouter Chauffeur</a>

                </div>
                <hr>
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom </th>
                            <th>Prenom </th>
                            <th>Adresse </th>
                            <th>E-mail </th>
                            <th>Region</th>
                            <th>Tarif</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($chauffeur as $chauffeur)
                            <tr>
                                <td>{{ $chauffeur->id }}</td>
                                <td>{{ $chauffeur->nomChauff }}</td>
                                <td>{{ $chauffeur->prenomChauff }}</td>
                                <td>{{ $chauffeur->adresseChauff }}</td>
                                <td>{{ $chauffeur->emailChauff }}</td>
                                <td>{{ $chauffeur->region->nomRegion }}</td>
                                <td>{{ $chauffeur->region->Tarif }}</td>
                                <td>
                                    <a href="{{ route('chauffeur.show', $chauffeur->id) }}" class="btn btn-secondary btn-sm">Voir</a>
                                    <a href="{{ route('chauffeur.edit', $chauffeur->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                                    <form action="{{ route('chauffeur.destroy', $chauffeur->id) }}" method="POST" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
