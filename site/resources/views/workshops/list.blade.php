@extends('layouts.default')

@section('content')
<article class="atelier">
    <!--
    // Si aucun n'atelier n'est actif, alors montrer ceci...
    <div class="emptyworkshop">
      <h1>Aucun atelier n'est prévu pour le moment.</h1>
    </div>
    -->
    <h1>
        Nos ateliers.
    </h1>
    @if( Auth::user() && Auth::user()->role=='admin') 
    <a href="/ateliers/create" class="btn-add" role="button">Ajouter</a>
    <a href="/inscription" role="button">Voir les inscriptions</a>
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
        <label>Prénom:</label>
        <input type="text" name="first_name">
        <label>Nom:</label>
        <input type="text" name="last_name">
        <label>Adresse mail:</label>
        <input type="email" name="email">
        <label>Nombre de places désirées:</label>
        <input type="number" name="nb_persons">

        <p>Un email de confirmation vous sera envoyé avec les informations de paiements à finaliser dans les 7 jours qui suivent la réception de ce-dernier pour finaliser votre inscription. Au dela de ce délais, votre inscription sera annulée et les places remises en vente.</p>
        <input type="submit" value="Confirmer l'inscription" class="btn-edit" id="sent">
    </form>
  </div>
</div>
@endsection
