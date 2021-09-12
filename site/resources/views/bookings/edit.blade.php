@extends('layouts.default')
@section('content')

<form action="/reservation/{{ $booking->id }}" method="post" class="form-edit reservation">
    @csrf
    @method('put')
    <h3>Réservation de l'article "{{ $booking->item->name }}"<br/>par {{ $booking->user->email }}</h3>
    <br/>

    <label>Acompte payé?</label>
    <select name="advance">
        <option value="1" {{ ($booking->advance == 1) ? 'selected' : '' }}>Oui</option>
        <option value="0" {{ ($booking->advance == 0) ? 'selected' : '' }}>Non</option>
    </select>

    <label>Reservation payée?</label>
    <select name="paid">
        <option value="1" {{ ($booking->paid == 1) ? 'selected' : '' }}>Oui</option>
        <option value="0" {{ ($booking->paid == 0) ? 'selected' : '' }}>Non</option>
    </select>

    <div class="cta">
        <input type="submit" value="Enregistrer" class="btn-add">
        <a href="/reservation" class="btn-back">Annuler</a>
    </div>
    @stop
</form>
