@extends('layouts.default')

@section('content')
<article class="category">
    @if (\Session::has('delete'))
        <div class="alert alert-danger">
            <ul>
                <li>{!! \Session::get('delete') !!}</li>
            </ul>
        </div>
    @elseif (\Session::has('update'))
    <div class="alert alert-warning">
        <ul>
            <li>{!! \Session::get('update') !!}</li>
        </ul>
    </div>
    @elseif (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
    @endif

    <h1>
        Les catégories.
    </h1>
    <a href="/categorie/create" class="btn-add" role="button">Ajouter une catégorie</a>
    <a href="/mobilier-accueil" class="btn-back">Annuler</a>
    @each('categories.one', $categories, 'categories')
</article>
@endsection