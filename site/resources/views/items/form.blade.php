@extends('layouts.default')
@section('content')

<form action="/mobilier" method="post" class="form-create mobilier">
    @csrf
    <label>Nom de l'article:</label>
    <input type="text" name="name">
    <label>Description de l'article:</label>
    <input type="text" name="description">
    <label>Prix:</label>
    <input type="number" name="price">

    <br>
    <label>amount:</label>
    <input type="number" name="amount">
    <label>custo:</label>
    <input type="number" name="customization">
    </br>

    <label>Catégories:</label>
    <input type="number" name="categories_id">

    <label>Mettre en ligne?</label>
    <input type="checkbox" name="active" value="1" checked>
    <label for="yes">Oui</label>

    <div class="cta">
        <input type="submit" value="Envoyer" class="btn-edit">
        <a href="/mobilier" class="btn-back">Annuler</a>
    </div>
</form>

@stop