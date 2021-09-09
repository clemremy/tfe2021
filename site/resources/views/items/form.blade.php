@extends('layouts.default')
@section('content')

<form action="/mobilier" method="post" class="form-create mobilier" enctype="multipart/form-data">
    @csrf

    @if (\Session::has('error'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div>
    @endif

    <label>Nom de l'article:</label>
    <input type="text" name="name">
    <label>Description de l'article:</label>
    <input type="text" name="description">
    <label>Prix de l'article:</label>
    <input type="number" name="price">
    <label>Image de l'article:</label>
    <p>Taille maximale: 2Mo.</p>
    <input type="file" name="image" placeholder="image">

    <br>
    <label>Quantité disponible:</label>
    <input type="number" name="amount">

    <label>Personnalisable:</label>
    <select name="customization">
        <option value="1">Oui</option>
        <option value="0">Non</option>
    </select>
    </br>

    <label>Catégories:</label>
    <select name="category">
        @foreach($categories as $categorie)
          <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
        @endforeach
    </select>

    <label>Mettre en ligne?</label>
    <select name="active">
        <option value="1">Oui</option>
        <option value="0">Non</option>
    </select>

    <div class="cta">
        <input type="submit" value="Envoyer" class="btn-add">
    </div>
</form>

@stop