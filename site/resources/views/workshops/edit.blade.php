@extends('layouts.default')
@section('content')

<form action="/ateliers/{{ $workshop->id }}" method="post" class="form edit">
    @csrf
    @method('put')
    <label>Nom de l'atelier:</label>
    <input type="text" name="name" value="{{ $workshop->name }}">
    <label>Description de l'atelier:</label>
    <input type="text" name="name" value="{{ $workshop->description }}">
    <label>Date de début:</label>
    <input type="date" name="start_date" value="{{ date('Y-m-d', strtotime($workshop->start_date)) }}">
    <label>Date de fin:</label>
    <input type="date" name="end_date" value="{{ date('Y-m-d', strtotime($workshop->end_date)) }}">
    <label>Nombre de places totales:</label>
    <input type="number" name="nb_places" value="{{ $workshop->nb_places }}">

    <input type="submit" value="Envoyer">
    <a href="/ateliers">Annuler</a>
</form>
@stop