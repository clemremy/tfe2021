@extends('layouts.default')
@section('content')

<form action="/ateliers/{{ $workshop->id }}" method="post" class="form-edit atelier">
    @csrf
    @method('put')
    <label>Nom de l'atelier:</label>
    <input type="text" name="name" value="{{ $workshop->name }}">
    <label>Description de l'atelier:</label>
    <input type="text" name="description" value="{{ $workshop->description }}">
    <label>Date de début:</label>
    <input type="date" name="start_date" value="{{ date('Y-m-d', strtotime($workshop->start_date)) }}">
    <label>Date de fin:</label>
    <input type="date" name="end_date" value="{{ date('Y-m-d', strtotime($workshop->end_date)) }}">
    <label>Nombre de places totales:</label>
    <input type="number" name="nb_places" value="{{ $workshop->nb_places }}">
    <label>Prix de l'atelier:</label>
    <input type="number" name="price" value="{{ $workshop->price }}">

    <label>Mettre en ligne?</label>
    <select name="active">
        <option value="1" {{ ($workshop->active == 1) ? 'selected' : '' }}>Oui</option>
        <option value="0" {{ ($workshop->active == 0) ? 'selected' : '' }}>Non</option>
    </select>

    <div class="cta">
        <input type="submit" value="Enregistrer" class="btn-edit">
        <a href="/ateliers" class="btn-back">Annuler</a>
    </div>
    @stop
</form>
