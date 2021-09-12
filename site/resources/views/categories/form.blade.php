@extends('layouts.default')
@section('content')

<form action="/categorie" method="post" class="form-create category">
    @csrf
    <label>Nom de la catégorie:</label>
    <input type="text" name="name">

    <div class="cta">
        <input type="submit" value="Envoyer" class="btn-add">
        <a href="/categorie" class="btn-back">Annuler</a>
    </div>
</form>

@stop