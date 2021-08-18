@extends('layouts.default')
@section('content')

<form action="/mobilier/{{ $item->id }}" method="post" class="form-edit mobilier">
    @csrf
    @method('put')
    <label>Nom de l'article:</label>
    <input type="text" name="name" value="{{ $item->name }}">
    <label>Description de l'article:</label>
    <input type="text" name="description" value="{{ $item->description }}">
    <label>Prix de l'article:</label>
    <input type="number" name="price" value="{{ $item->price }}">
    <label>Image de l'article:</label>
    <input type="file" name="image" placeholder="image">
    <img src="/image/{{ $item->image }}" width="300px"><br/>

    <label>Quantité disponible:</label>
    <input type="number" name="amount" value="{{ $item->amount }}">
    <label>Personnalisable?</label>
    <input type="number" name="customization" value="{{ $item->customization }}">
    <label>Catégorie:</label>
    <input type="number" name="categories_id" value="{{ $item->categories_id }}">
    
    
    <label>Mettre en ligne?</label>
    <div class="check">
        <input type="checkbox" name="active" value="1" checked>
        <label for="yes">Oui</label>
    </div>
    <div class="cta">
        <input type="submit" value="Enregistrer" class="btn-edit">
        <a href="/mobilier" class="btn-back">Annuler</a>
    </div>
    @stop
</form>
