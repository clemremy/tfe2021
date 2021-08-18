@extends('layouts.default')
@section('content')

<form action="/ateliers" method="post" class="form-create atelier">
    @csrf
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
    <label>Prix:</label>
    <input type="number" name="price">

    <label>Mettre en ligne?</label>
    <select name="active">
        <option value="1">Oui</option>
        <option value="0">Non</option>
    </select>

    <div class="cta">
        <input type="submit" value="Envoyer" class="btn-edit">
        <a href="/ateliers" class="btn-back">Annuler</a>
    </div>
</form>

@stop