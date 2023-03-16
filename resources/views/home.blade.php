@extends('layout')

@section('content_map')

<div class="container">

    <h1 class="title">Carte à minerais</h1>

    <div class="ligne">
        <div class="carrer"></div>    
        <div class="carrer"></div>    
        <div class="carrer"></div>    
        <div class="carrer"></div>    
        <div class="carrer"></div>    
    </div>
    <div class="ligne">
        <div class="carrer"></div>    
        <div class="carrer"></div>    
        <div class="carrer"></div>    
        <div class="carrer"></div>    
        <div class="carrer"></div>    
    </div>
    <div class="ligne">
        <div class="carrer"></div>    
        <div class="carrer"></div>    
        <div class="carrer"></div>    
        <div class="carrer"></div>    
        <div class="carrer"></div>    
    </div>
    <div class="ligne">
        <div class="carrer"></div>    
        <div class="carrer"></div>    
        <div class="carrer"></div>    
        <div class="carrer"></div>    
        <div class="carrer"></div>    
    </div>
    <div class="ligne">
        <div class="carrer"></div>    
        <div class="carrer"></div>    
        <div class="carrer"></div>    
        <div class="carrer"></div>    
        <div class="carrer"></div>    
    </div>
        <a name="" id="" class="btn btn-primary mb-2 " href="/zone/create" role="button">Signaler une zone radioactive</a>
        <a name="" id="" class="btn btn-primary mb-2" href="/zone" role="button">Liste des zones signaler</a>
        <a name="" id="" class="btn btn-primary mb-2" href="/minerai/create" role="button">Ajout d'un minerai</a>
        <a name="" id="" class="btn btn-primary" href="/minerai" role="button">Liste de minerais</a>
    </div>

@endsection

@section('content_overlay')

<h1 class="title">Minerai.gouv</h1>

<h2></h2>

<p>Afin de mettre fin à l'écatombe qui se produit actuellement dans la population néomarsienne, le Président Directeur Mondial de la planète mars nous à demandé de concevoir une application qui permettrer à chacun de visualizer les zones sensibles à éviter.</p>
<h5>Comment ça fonctionne ?</h5>

<p>C'est simple ! Comme vous voyez à gauche, cette map ressemblant à un rubik's cube sert à repèrer visuellement les zones toucher par la radiation des minerais suite au signalement des spécialiste mais également DES VÔTRES ! </p>
<p>Si un carré de la map est coloré alors c'est que la zone à était signaler "radioactive" (cliquer sur le carré pour avoir plus de détail sur la zone).</p>
<p> Pour cela, il suffit de cliquer sur les boutons situé en dessous de la map pour signaler une zone radioactive, ajouter un minéral voir la liste des zones signalé et également d'ajouter de nouveau minerai si découvert.</p>
@endsection