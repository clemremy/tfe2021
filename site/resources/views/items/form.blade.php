@extends('layouts.default')
@section('content')

<form action="/mobilier" method="post" class="form-create mobilier" enctype="multipart/form-data">
    @csrf
    <label>Nom de l'article:</label>
    <input type="text" name="name">
    <label>Description de l'article:</label>
    <input type="text" name="description">
    <label>Prix de l'article:</label>
    <input type="number" name="price">
    <label>Image de l'article:</label>
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
    <input type="number" name="categories_id">

    <label>Mettre en ligne?</label>
    <select name="active">
        <option value="1">Oui</option>
        <option value="0">Non</option>
    </select>

    <div class="cta">
        <input type="submit" value="Envoyer" class="btn-edit">
        <a href="{{ url()->previous() }}" class="btn-back">Annuler</a>
    </div>
</form>

@stop