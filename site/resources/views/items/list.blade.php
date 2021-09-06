@extends('layouts.default')

@section('content')
<article class="item">
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
    @elseif (\Session::has('usersuccess'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('usersuccess') !!}</li>
        </ul>
    </div>
    @endif

    <h1 class="col-12">
        Ils vous attendent.
    </h1>
    @if( Auth::user() && Auth::user()->role=='admin') 
    <ul class="admin-link col-12">
        <li>
            <a href="/mobilier/create" class="btn-add" role="button">Ajouter un article</a>
        </li>
        <li>
            <a href="/reservation" role="button">Voir les réservations</a>
        </li>
        <li>
            <a href="/categorie" role="button">Voir les catégories d'articles</a>
        </li>
    </ul>
    @endif
    @each('items.one', $items, 'items')
</article>

@endsection
