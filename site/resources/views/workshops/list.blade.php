@extends('layouts.default')

@section('content')
<article class="atelier">
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
    @elseif (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
    @elseif (\Session::has('usersuccess'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('usersuccess') !!}</li>
        </ul>
    </div>
    @elseif (\Session::has('error'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div>
    @endif
 
    <h2>
        Nos ateliers.
    </h2>
    @if( Auth::user() && Auth::user()->role=='admin')
    <ul class="admin-link col-12">
        <li>
            <a href="/ateliers/create" class="btn-add" role="button">Ajouter</a>
        </li>
        <li>
            <a href="/inscription" role="button" class="btn-back">Voir les inscriptions</a>
        </li>
    </ul>
    @endif
    @each('workshops.one', $workshops, 'workshop')
</article>

<!-- FORM INSCRIPTION-->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form action="/inscription" method="post" class="form">
    @csrf
    <input type="hidden" name="workshop_id">
        <h3>Formulaire d'inscription</h3>

        <label>Adresse mail:</label>
        @if ( Auth::check() )
        <input type="email" name="email" value="{{ Auth::user()->email }}" required>
        @endif
        
        <label>Nombre de places désirées<sup>*</sup>:</label>
        <input type="number" name="nb_persons" required>

        <input type="text" id="honeypot" value="" style="display:none">
        
        <p>Un email de confirmation vous sera envoyé avec les informations de paiements à réaliser dans les 7 jours qui suivent la réception de ce-dernier pour finaliser votre inscription. Au dela de ce délais, votre inscription sera annulée et les places remises en vente.

          <br/><br/>
          <sup>* Sous réserve des places disponibles.</sup>
        </p>
        <input type="submit" value="Confirmer l'inscription" class="custom-button" id="sent">
    </form>
  </div>
</div>
@endsection
