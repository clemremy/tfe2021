@extends('layouts.default')
@section('content')

<form action="/inscription/{{ $workshop_user->id }}" method="post" class="form-edit inscription">
    @csrf
    @method('put')
    <label>Nom de l'utilisateur:</label>
    <input type="text" name="name" value="{{ $workshop_user->user_id }}">
    <label>Atelier concerné:</label>
    <input type="text" name="description" value="{{ $workshop_user->workshop_id }}">
    <label>Nombre de places réservées:</label>
    <input type="number" name="nb_places" value="{{ $workshop_user->nb_persons }}">

    <label>Reservation payée?</label>
    <select name="paid">
        <option value="1" {{ ($workshop_user->paid == 1) ? 'selected' : '' }}>Oui</option>
        <option value="0" {{ ($workshop_user->paid == 0) ? 'selected' : '' }}>Non</option>
    </select>

    <div class="cta">
        <input type="submit" value="Enregistrer" class="btn-edit">
        <a href="/ateliers" class="btn-back">Annuler</a>
    </div>
    @stop
</form>
