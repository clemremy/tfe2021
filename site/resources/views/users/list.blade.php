@extends('layouts.default')

@section('content')
<article class="utilisateur">
    <div class="admin-link">
        <a href="/profil" class="btn-back">Retour</a>
    </div>
    
    <h2>
        Les utilisateurs.
    </h2>
    <table>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Newsletter</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
        @each('users.one', $users, 'user')
    </table>

    <div class="administrateurs">
        <h2>
            Administrateurs.
        </h2>
        <table>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Email</th>
            </tr>
            @each('users.admin', $users, 'user')
        </table>
    </div>

    <div class="newsletter">
        <h2>
            Newsletter.
        </h2>
        <table>
            <tr>
                <th>Email</th>
            </tr>
            @each('users.two', $users, 'user')
        </table>
    </div>

</article>

@endsection
