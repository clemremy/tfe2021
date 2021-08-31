@extends('layouts.default')
@section('content')

<form action="/mobilier/{{ $item->id }}" method="post" class="form-edit mobilier" enctype="multipart/form-data">
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
    <img src="/images/article/{{ $item->image }}" width="300px"><br/>

    <label>Quantité disponible:</label>
    <input type="number" name="amount" value="{{ $item->amount }}">

    <label>Personnalisable?</label>
    <select name="customization">
        <option value="1" {{ ($item->customization == 1) ? 'selected' : '' }}>Oui</option>
        <option value="0" {{ ($item->customization == 0) ? 'selected' : '' }}>Non</option>
    </select>

    <label>Catégorie:</label>
    <input type="number" name="categories_id" value="{{ $item->categories_id }}">
      
    <label>Mettre en ligne?</label>
    <select name="active">
        <option value="1" {{ ($item->active == 1) ? 'selected' : '' }}>Oui</option>
        <option value="0" {{ ($item->active == 0) ? 'selected' : '' }}>Non</option>
    </select>

    <div class="cta">
        <input type="submit" value="Enregistrer" class="btn-edit">
        <a href="{{ url()->previous() }}" class="btn-back">Annuler</a>
    </div>
    @stop
</form>
