@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Itinéraire "{{ $itineraire->nomIte }}"
        </div>
        <div class="card-body">
            <form action="{{ route('itineraire.update', $itineraire) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nomIte">Nom de l'itinéraire :</label>
                    <input type="text" name="nomIte" id="nomIte" class="form-control" value="{{ $itineraire->nomIte }}" required>
                </div>
                <div class="form-group">
                    <label for="tarif">Tarif :</label>
                    <input type="number" name="tarif" id="tarif" class="form-control" value="{{ $itineraire->tarif }}" required>
                </div>
                <div class="form-group">
                    <label for="region_id">Région :</label>
                    <select name="region_id" id="region_id" class="form-control" required>
                        @foreach($regions as $region)
                            <option value="{{ $region->id }}" @if($itineraire->region->id == $region->id) selected @endif>{{ $region->nomRegion }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div>
    </div>
</div>
@endsection
