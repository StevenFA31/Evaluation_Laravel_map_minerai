@extends('layout')
@section('content_overlay')
<ul>
    <li>ID : {{ $minerai->id }}</li>
    <li>Type : {{ $minerai->type }}</li>
    <li>Quantité : {{ $minerai->quantité }}</li>
</ul>
<div>
    <a href="/minerai/update/{{ $minerai->id }}"><i class="fa-solid fa-pen-to-square"></i></a>&nbsp;&nbsp;&nbsp;
    <a href="/minerai/delete/{{ $minerai->id }}"><i class="fa-solid fa-trash"></i></a>
</div>

</ul>
<div class="divCatButton">
<a class="addForm gray btn" href="/minerai">Retour</a>
</div>
@endsection