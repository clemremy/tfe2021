@extends('layouts.default')
@section('content')

<form action="/profil/{{ $user->id }}" method="post" class="form-edit profil">
    @csrf
    @method('put')
    <label for="prenom">Prénom:</label>
    <input type="text" name="prenom">

    <label for="name">Nom:</label>
    <input type="text" name="name">

    <label for="email">Adresse mail:</label>
    <input type="email" name="email">

    <label>Recevoir la newsletter?</label>
    <select name="newsletter">
        <option value="1" {{ ($item->active == 1) ? 'selected' : '' }}>Oui</option>
        <option value="0" {{ ($item->active == 0) ? 'selected' : '' }}>Non</option>
    </select>

    <div class="cta">
        <input type="submit" value="Enregistrer" class="btn-edit">
        <a href="{{ url()->previous() }}" class="btn-back">Annuler</a>
    </div>
    @stop
</form>