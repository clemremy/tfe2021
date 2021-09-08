@extends('layouts.default')

@section('content')
<article class="utilisateur">
    @if (\Session::has('delete'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('delete') !!}</li>
            </ul>
        </div>
    @elseif (\Session::has('update'))
    <div class="alert alert-warning">
        <ul>
            <li>{!! \Session::get('update') !!}</li>
        </ul>
    </div>
    @elseif (\Session::has('error'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div>
    @endif

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
