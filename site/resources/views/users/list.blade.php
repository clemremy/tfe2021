@extends('layouts.default')

@section('content')
<article class="utilisateur">
    <h1>
        Les utilisateurs.
    </h1>
    <table>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @each('users.one', $users, 'user')
    </table>
</article>

@endsection
