@extends('layouts.default')

@section('content')
<article class="category">
    <h1>
        Les catégories.
    </h1>
    <a href="/categorie/create" class="btn-add" role="button">Ajouter une catégorie</a>
    <a href="/mobilier-accueil" class="btn-back">Annuler</a>
    @each('categories.one', $categories, 'categories')
</article>
@endsection