@extends('layouts.default')

@section('content')
<article class="utilisateur">
    <h1>
        Les utilisateurs.
    </h1>
    <a href="/profil" class="btn-back">Retour</a>
    <table>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Newsletter</th>
            <th>Action</th>
        </tr>
        @each('users.one', $users, 'user')
    </table>
</article>

@endsection
