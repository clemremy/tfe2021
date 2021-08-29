@extends('layouts.default')
@section('content')

<form action="/reservation/{{ $booking->id }}" method="post" class="form-edit reservation">
    @csrf
    @method('put')
    <label>Nom de l'utilisateur:</label>
    <input type="text" name="name" value="{{ $booking->user_id }}">
    <label>Atelier concerné:</label>
    <input type="text" name="description" value="{{ $booking->workshop_id }}">

    <label>Reservation payée?</label>
    <select name="paid">
        <option value="1" {{ ($booking->paid == 1) ? 'selected' : '' }}>Oui</option>
        <option value="0" {{ ($booking->paid == 0) ? 'selected' : '' }}>Non</option>
    </select>

    <div class="cta">
        <input type="submit" value="Enregistrer" class="btn-edit">
        <a href="/reservation" class="btn-back">Annuler</a>
    </div>
    @stop
</form>
