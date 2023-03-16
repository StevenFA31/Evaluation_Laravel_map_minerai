@extends('layout')
@section('content_map')


        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Niveau de danger</th>
                    <th scope="col">Type</th>
                    <th scope="col">Quantité(%)</th>
                    <th scope="col">Date</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($zones as $zone)
                    <tr class="">
                        <td scope="row">{{ $zone->id }}</td>
                        <td>{{ $zone->danger }}</td>
                        <td>{{ $zone->minerai->type }}</td>
                        <td>{{ $zone->quantite }}</td>
                        <td>{{ $zone->date }}</td>
                        <td>
                            <a href="/zone/update/{{ $zone->id }}"><i class="fa-solid fa-pen-to-square"></i></a>&nbsp;&nbsp;&nbsp;
                            <a href="/zone/delete/{{ $zone->id }}"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

<a name="" id="" class="btn btn-primary" href="/" role="button">Retour</a>


@endsection

@section('content_overlay')

<div>
    <h2>Signalez une radiation</h2>
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

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Envoyer</button>
        </div>
    </form>
</div>
@endsection

