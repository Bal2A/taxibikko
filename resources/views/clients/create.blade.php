@extends('layouts.app')
@section('content')
    <div class="container">
    
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Créer un client') }}</div>
    

                    <div class="card-body">
                        <form method="POST" action="{{ route('clients.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                                <div class="col-md-6">
                                    <input id="nom"  type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                                    @error('nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

                                <div class="col-md-6">
                                    <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                    @error('prenom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="adresse" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>

                                <div class="col-md-6">
                                    <textarea id="adresse" class="form-control @error('adresse') is-invalid @enderror" name="adresse" required autocomplete="adresse">{{ old('adresse') }}</textarea>

                                    @error('adresse')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="region" class="col-md-4 col-form-label text-md-right">{{ __('Région') }}</label>
                                <div class="col-md-6">
                                    <select id="region" class="form-control @error('region') is-invalid @enderror" name="region" required>
                                        <option value="" disabled selected hidden>{{ __('Choisir une région') }}</option>
                                        @foreach($regions as $region)
                                            <option value="{{ $region->id }}">{{ $region->nomRegion }}</option>
                                        @endforeach
                                    </select>
                                    @error('region')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>   
                            <div class="form-group row">
                                <label for="region" class="col-md-4 col-form-label text-md-right">{{ __('Itinéraire') }}</label>
                            <div class="col-md-6">
                                <select id="itineraire" class="form-control" name="itineraire" required>
                                    <option value="" disabled selected hidden>{{ __('Choisir un itinéraire') }}</option>
                                    @foreach($itineraires as $itineraire)
                                            <option value="{{ $itineraire->id }}">{{ $itineraire->nomIte }}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tarif" class="col-md-4 col-form-label text-md-right">{{ __('Tarif') }}</label>

                            <div class="col-md-6">
                                <input id="tarif" type="number" class="form-control @error('tarif') is-invalid @enderror" name="tarif" value="{{ old('tarif') }}" required autocomplete="tarif" autofocus>

                                @error('tarif')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                     <button type="submit" class="btn btn-primary">
                                        Creer
                                    </button>
                                    <a class="btn btn-secondary" href="{{ route('clients.index') }}">{{ __('Annuler') }}</a>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

 



                           
                               