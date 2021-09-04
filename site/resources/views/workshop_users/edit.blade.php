@extends('layouts.default')
@section('content')

<form action="/inscription/{{ $workshop_user->id }}" method="post" class="form-edit inscription">
    @csrf
    @method('put')
    <h3>Réservation de l'atelier "{{ $workshop_user->workshop->name }}" <br/>par {{ $workshop_user->user->email }}</h3>
    <br/>

    <label>Nombre de places réservées:</label>
    <input type="number" name="nb_persons" value="{{ $workshop_user->nb_persons }}">

    <label>Acompte payé?</label>
    <select name="advance">
        <option value="1" {{ ($workshop_user->advance == 1) ? 'selected' : '' }}>Oui</option>
        <option value="0" {{ ($workshop_user->advance == 0) ? 'selected' : '' }}>Non</option>
    </select>

    <label>Réservation payée?</label>
    <select name="paid">
        <option value="1" {{ ($workshop_user->paid == 1) ? 'selected' : '' }}>Oui</option>
        <option value="0" {{ ($workshop_user->paid == 0) ? 'selected' : '' }}>Non</option>
    </select>

    <div class="cta">
        <input type="submit" value="Enregistrer" class="btn-edit">
        <a href="/inscription" class="btn-back">Annuler</a>
    </div>
    @stop
</form>
