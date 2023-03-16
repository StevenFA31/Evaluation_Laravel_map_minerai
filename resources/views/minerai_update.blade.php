@extends('layout')


@section('content_map')
@endsection


@section('content_overlay')

<div>
    <h2>Modification du minerai</h2>
    <br>

    <form name="mineraiForm" method="post" action="/minerai/{{ $path }}">
    @csrf
        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Quel est le type que vous vouliez lui attribuer ?</label>
            <input name="type" type="text" class="form-control" id="validationCustom01" value="{{ $minerai->type ?? '' }}" required>
        </div>
            <input type="hidden" name="id" value="{{ $minerai->id }}">

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Envoyer</button>
            <a name="" id="" class="btn btn-primary" href="/minerai/create" role="button">Retour</a>
        </div>
    </form>
</div>

@endsection