@extends('layouts.default')
@section('content')

<form action="/mobilier/{{ $item->id }}" method="post" class="form-edit mobilier" enctype="multipart/form-data">
    @csrf
    @method('put')

    @if (\Session::has('error'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div>
    @endif

    <label>Nom de l'article:</label>
    <input type="text" name="name" value="{{ $item->name }}">
    <label>Description de l'article:</label>
    <input type="text" name="description" value="{{ $item->description }}">
    <label>Prix de l'article:</label>
    <input type="number" name="price" value="{{ $item->price }}">
    <label>Image de l'article:</label>
    <input type="file" name="image" placeholder="image">
    <p>Taille maximale: 2Mo.</p>
    <img src="/images/article/{{ $item->image }}" width="300px"><br/><br/>

    <label>Quantité disponible:</label>
    <input type="number" name="amount" value="{{ $item->amount }}">

    <label>Personnalisable?</label>
    <select name="customization">
        <option value="1" {{ ($item->customization == 1) ? 'selected' : '' }}>Oui</option>
        <option value="0" {{ ($item->customization == 0) ? 'selected' : '' }}>Non</option>
    </select>

    <label>Catégorie:</label>
    <select name="category">
        @foreach($categories as $categorie)
           @if ($item->categorie && $categorie->id == $item->categorie->id)
               <option value="{{ $categorie->id }}" selected>{{ $categorie->name }}</option>
           @else
               <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
           @endif
        @endforeach
    </select>

    <label>Mettre en ligne?</label>
    <select name="active">
        <option value="1" {{ ($item->active == 1) ? 'selected' : '' }}>Oui</option>
        <option value="0" {{ ($item->active == 0) ? 'selected' : '' }}>Non</option>
    </select>

    <div class="cta">
        <input type="submit" value="Enregistrer" class="btn-add">
    </div>
    @stop
</form>
