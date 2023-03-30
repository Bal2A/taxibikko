@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('regions.index') }}" class="btn btn-primary">Retour</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Créer une région') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('regions.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="nomRegion" class="col-md-4 col-form-label text-md-right">{{ __('Nom de la région') }}</label>

                                <div class="col-md-6">
                                    <input id="nomRegion" type="text" class="form-control @error('nomRegion') is-invalid @enderror" name="nomRegion" value="{{ old('nomRegion') }}" required autocomplete="nomRegion" autofocus>

                                    @error('nomRegion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Créer') }}
                                    </button>
                                    <a class="btn btn-secondary" href="{{ route('regions.index') }}">{{ __('Annuler') }}</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
