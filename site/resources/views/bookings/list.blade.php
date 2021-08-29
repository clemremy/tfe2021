@extends('layouts.default')

@section('content')
<article class="reservation">
    <h1>
        Réservation.
    </h1>
    
    <div class="cta">
        <a href="/mobilier-accueil" class="btn-back">Retour aux articles</a>
    </div>

    <table>
        <tr>
            <th>Utilisateur</th>
            <th>Mobilier</th>
            <th>Réservation payée?</th>
            <th>Action</th>
        </tr>
        @each('bookings.one', $bookings, 'booking')
    </table>
</article>
@endsection
