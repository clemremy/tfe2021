@extends('layouts.default')

@section('content')
<article class="item">
    <h1>
        Ils vous attendent.
    </h1>
    @if( Auth::user() && Auth::user()->role=='admin') 
    <a href="/mobilier/create" class="btn-add" role="button">Ajouter un article</a>
    <a href="/reservation" role="button">Voir les réservations</a>
    <a href="/categorie" role="button">Voir les catégories d'articles</a>
    @endif
    @each('items.one', $items, 'items')
</article>

@endsection
