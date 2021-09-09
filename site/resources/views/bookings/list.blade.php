@extends('layouts.default')

@section('content')
<article class="reservation">
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

    <h2>
        Réservation.
    </h2>
    
    <div class="admin-link">
        <a href="/mobilier" class="btn-back">Retour aux articles</a>
    </div>

    <table>
        <tr>
            <th>Numéro</th>
            <th>Utilisateur</th>
            <th>Article</th>
            <th>Prix total</th>
            <th>Prix de l'acompte</th>
            <th>Acompte payé?</th>
            <th>Réservation payée?</th>
            <th>Action</th>
        </tr>
        @each('bookings.one', $bookings, 'booking')
    </table>
</article>
@endsection