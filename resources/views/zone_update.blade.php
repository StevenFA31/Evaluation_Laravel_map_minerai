@extends('layout')


@section('content_map')
@endsection


@section('content_overlay')

<div>
    <h2>Modification du signalement de la zone</h2>
    <br>

    <form name="zoneForm" method="post" action="/zone/{{ $path }}">
    @csrf
        <div class="col-md-12 mb-2">
            <label for="validationCustom01" class="form-label">Quel est la quantité, de 0 à 100%, de minéraux sur la zone ?</label>
            <input name="quantite" type="text" class="form-control" id="validationCustom01" value="{{ $zone->quantite ?? '' }}" required>
        </div>

        

        <div class="col-md-12 mb-2">
            <label for="validationCustom04" class="form-label" >Sur une échelle de 1 à 10, quel est le niveau de dangerosité ?</label>
            <input type="number" id="tentacles" name="danger" min="0" max="10" value="{{ $zone->danger ?? '' }}" required>
            <div class="invalid-feedback">
                Veuillez selectionnez un niveau de danger !
            </div>
        </div>
        <div class="col-12 mb-2">
                <label for="validationCustom04" class="form-label"> Quand est-ce que vous aviez fait cette découvert ?</label>
                <br>
                <input type="date" name="date" value="{{ $zone->date ?? '' }}">
        </div>

        <p class="mb-2"> Quel sont les types de minéraux que vous aviez rencontré ?</p>
        @foreach ($minerais as $minerai)
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox"  id="invalidCheck" name="minerai" value="{{ $minerai->id }}">
                <label class="form-check-label" for="invalidCheck" >
                    {{ $minerai->type }}
                </label>
            </div>
        </div>
        @endforeach
        {{-- <input type="hidden" name="id" value="{{ $zone->id }}"> --}}
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Envoyer</button>
        </div>
    </form>
</div>
@endsection