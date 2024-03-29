@extends('layouts.default')
@section('content')

<form action="/utilisateurs/{{ $user->id }}" method="post" class="form-edit utilisateur">
    @csrf
    @method('put')
    <label>Prénom:</label>
    <input type="text" name="first_name" value="{{ $user->first_name }}">
    <label>Nom:</label>
    <input type="text" name="last_name" value="{{ $user->last_name }}">
    <label>Email:</label>
    <input type="text" name="email" value="{{ $user->email }}">
    <label>Admin?</label>
    <select name="role">
        <option value="admin" {{ ($user->role == 'admin') ? 'selected' : '' }}>Oui</option>
        <option value="user" {{ ($user->role == 'user') ? 'selected' : '' }}>Non</option>
    </select>
    <div class="cta">
        <input type="submit" value="Enregistrer" class="btn-edit">
        <a href="/utilisateurs" class="btn-back">Annuler</a>
    </div>
    @stop
</form>
