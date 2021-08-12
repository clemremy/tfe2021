@extends('layouts.default')

@section('content')
<article class="item">
    <h1>
        Nos articles.
    </h1>
    @if( Auth::user() && Auth::user()->role=='admin') 
    <a href="/mobilier/create" class="btn-add" role="button">Ajouter un article</a>
    <a href="/categorie" role="button">Voir les catégories d'articles</a>
    @endif
    @each('items.one', $items, 'items')
</article>
@endsection