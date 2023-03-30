@extends('layouts.app')
   
@section('content')
<div class="container btn btn-secondary">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
   
                <div class="card-body">
                        WELCOME  
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenu</div>
   
                <div class="card-body"></div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Mon application</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('itineraire.index') }}">Itinéraires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('regions.index') }}">Régions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('clients.index') }}"> Listes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('chauffeur.index') }}">Listes</a>
                    </li>
                </ul>
            </div>
        </nav>
        </div>
        </div>
    </div>
</div>

@endsection