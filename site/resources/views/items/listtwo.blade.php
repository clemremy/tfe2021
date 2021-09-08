@extends('layouts.default')

@section('content')
<article class="item">
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

    <div class="item-title col-12">
        <h2>
            Nos articles à personnaliser.
        </h2>
        <p>
            Encore dans leur état d'origine, ces biens n'attendent que vous pour entrer dans la grande aventure de la revalorisation. L'un deux vous inspire et vous le voyez déjà chez vous? Dîtes-moi vos désirs, je m'occupe du reste!
        </p>
    </div>
    
    @if( Auth::user() && Auth::user()->role=='admin') 
    <ul class="admin-link col-12">
        <li>
            <a href="/mobilier/create" class="btn-add" role="button">Ajouter un article</a>
        </li>
        <li>
            <a href="/categorie" role="button" class="btn-back">Voir les catégories</a>
        </li>
    </ul>
    @endif
    @each('items.two', $items, 'items')
</article>

@endsection
