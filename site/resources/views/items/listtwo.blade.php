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
    @endif

    <h2>
        Nos articles à personnaliser.
    </h2>
    <p>
        Ces biens sont encore dans leur état d'origine mais n'attendent que vous pour rentrer dans la grande aventure. L'un deux vous inspire et vous le voyez déjà chez vous? Contactez-moi, je m'occupe du reste!
    </p>
    @if( Auth::user() && Auth::user()->role=='admin') 
    <a href="/mobilier/create" class="btn-add" role="button">Ajouter un article</a>
    <a href="/categorie" role="button" class="btn-back">Voir les catégories</a>
    @endif
    @each('items.two', $items, 'items')
</article>

@endsection
