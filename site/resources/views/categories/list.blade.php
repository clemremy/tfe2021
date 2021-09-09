@extends('layouts.default')

@section('content')
<article class="category">
    @if (\Session::has('delete'))
        <div class="alert alert-success">
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
    @elseif (\Session::has('error'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div>
    @endif

    <h2>
        Les catégories.
    </h2>
    <div class="admin-link">
        <a href="/categorie/create" class="btn-add" role="button">Ajouter une catégorie</a>
        <a href="/mobilier-accueil" class="btn-back">Annuler</a>
    </div>
    <table>
        <tr>
            <th>
                Nom
            </th>
            <th>
                Action
            </th>
        </tr>
    @each('categories.one', $categories, 'categories')
    </table>
</article>
@endsection