@extends('layouts.default')
@section('content')

<form action="/categorie/{{ $category->id }}" method="post" class="form-edit category">
    @csrf
    @method('put')
    <label>Nom de la catégorie:</label>
    <input type="text" name="name" value="{{ $category->name }}">
   
    <div class="cta">
        <input type="submit" value="Enregistrer" class="btn-add">
        <a href="/categorie" class="btn-back">Annuler</a>
    </div>
    @stop
</form>
