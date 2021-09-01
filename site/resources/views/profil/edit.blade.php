<form action="/profil" method="post" class="form-edit profil">
    @csrf
    @method('put')
    <label for="prenom">Prénom:</label>
    <input type="text" name="prenom" value="{{ $user->first_name }}">

    <label for="name">Nom:</label>
    <input type="text" name="name" value="{{ $user->last_name }}">

    <label for="email">Adresse mail:</label>
    <input type="email" name="email" value="{{ $user->email }}">

    <label>Recevoir la newsletter?</label>
    <select name="newsletter">
        <option value="1" {{ ($user->newsletter == 1) ? 'selected' : '' }}>Oui</option>
        <option value="0" {{ ($user->newsletter == 0) ? 'selected' : '' }}>Non</option>
    </select>

    <div class="cta">
        <input type="submit" value="Enregistrer" class="btn-edit">
        <a href="{{ url()->previous() }}" class="btn-back">Annuler</a>
    </div>
</form>