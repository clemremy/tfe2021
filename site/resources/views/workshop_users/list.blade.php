@extends('layouts.default')

@section('content')
<article class="atelier_utilisateur">
    @if (\Session::has('delete'))
        <div class="alert alert-danger">
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
    @endif

    <h1>
        Inscription aux ateliers.
    </h1>
    
    <div class="cta">
        <a href="/ateliers" class="btn-back">Retour aux ateliers</a>
    </div>

    <table>
        <tr>
            <th>Utilisateur</th>
            <th>Atelier</th>
            <th>Nombre de places</th>
            <th>Acompte payé?</th>
            <th>Réservation payée?</th>
            <th>Action</th>
        </tr>
        @each('workshop_users.one', $workshop_users, 'workshop_user')
    </table>
</article>
@endsection
