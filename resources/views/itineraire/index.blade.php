@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="mb-0">Itineraires</h1>
                    <a href="{{ route('itineraire.create') }}" class="btn btn-primary">Ajout</a>
                    <a href="{{ route('admin.home') }}" class="btn btn-primary">Retour</a>

                </div>
                <hr>
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom Itineraire</th>
                            <th>Tarif</th>
                            <th>Region</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($itineraire as $itineraire)
                            <tr>
                                <td>{{ $itineraire->id }}</td>
                                <td>{{ $itineraire->nomIte }}</td>
                                <td>{{ $itineraire->tarif }}</td>
                                <td>{{ $itineraire->region->nomRegion }}</td>
                                <td>
                                    <a href="{{ route('itineraire.show', $itineraire->id) }}" class="btn btn-secondary btn-sm">Voir</a>
                                    <a href="{{ route('itineraire.edit', $itineraire->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                                    <form action="{{ route('itineraire.destroy', $itineraire->id) }}" method="POST" style="display: inline-block">
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
