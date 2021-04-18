@extends('layouts.default')
@section('content')

<form action="/ateliers" method="post" class="form create">
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
    <label>Mettre en ligne?</label>
    <input type="checkbox" name="active" value="1" checked>
    <label for="yes">Oui</label>

    <input type="submit" value="Envoyer" class="btn-send">
    <a href="/ateliers" class="btn-back">Annuler</a>
</form>

@stop