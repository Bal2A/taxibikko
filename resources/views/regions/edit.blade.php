@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="d-flex justify-content-between align-items-center">
                    
                    <a href="{{ route('regions.index') }}" class="btn btn-primary">Retour</a>
    </div>            
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Éditer la région
                    </div>
                    <div class="card-body">
                        <form action="{{ route('regions.update', $region->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nomRegion">Nom de la région :</label>
                                <input type="text" name="nomRegion" id="nomRegion" class="form-control" value="{{ $region->nomRegion }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
