@extends('layouts.default')
@section('content')

<form action="/ateliers" method="post" class="form-create atelier" enctype="multipart/form-data">
    @csrf

    @if (\Session::has('error'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div>
    @endif

    <label>Nom de l'atelier:</label>
    <input type="text" name="name">
    <label>Description de l'atelier:</label>
    <input type="text" name="description">
    <label>Date de début:</label>
    <input type="date" name="start_date">
    <label>Date de fin:</label>
    <input type="date" name="end_date">
    <label>Nombre de places:</label>
    <input type="number" name="nb_places">
    <label>Prix par personne:</label>
    <input type="number" name="price">
    <label>Image de l'atelier:</label>
    <p>Taille maximale: 2Mo.</p>
    <input type="file" name="image" placeholder="image">

    <label>Mettre en ligne?</label>
    <select name="active">
        <option value="1">Oui</option>
        <option value="0">Non</option>
    </select>

    <div class="cta">
        <input type="submit" value="Envoyer" class="btn-add">
        <a href="/ateliers" class="btn-back">Annuler</a>
    </div>
</form>

@stop