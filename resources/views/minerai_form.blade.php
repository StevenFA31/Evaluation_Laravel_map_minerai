@extends('layout')

@section('content_map')

        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Type</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($minerais as $minerai)
                    <tr class="">
                        <td scope="row">{{ $minerai->id }}</td>
                        <td>{{ $minerai->type }}</td>
                        <td>
                            <a href="/minerai/update/{{ $minerai->id }}"><i class="fa-solid fa-pen-to-square"></i></a>&nbsp;&nbsp;&nbsp;
                            <a href="/minerai/delete/{{ $minerai->id }}"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

<a name="" id="" class="btn btn-primary" href="/" role="button">Retour</a>

@endsection




@section('content_overlay')

<div>
    <h2>Ajout d'un minerai</h2>
    <br>

    <form name="mineraiForm" method="post" action="/minerai/{{ $path }}">
    @csrf
        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Quel est le type de votre minerai ?</label>
            <input name="type" type="text" class="form-control" id="validationCustom01"  required>
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Envoyer</button>
        </div>
    </form>
</div>

@endsection

