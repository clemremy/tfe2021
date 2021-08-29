@extends('layouts.default')

@section('content')
<article class="item">
    <h1>
        Nos articles.
    </h1>
    @if( Auth::user() && Auth::user()->role=='admin') 
    <a href="/mobilier/create" class="btn-add" role="button">Ajouter un article</a>
    <a href="/categorie" role="button">Voir les catégories d'articles</a>
    @endif
    @each('items.one', $items, 'items');
    @each('items.two', $items, 'items');
</article>



<!-- FORM INSCRIPTION-->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form action="/reservation" method="post" class="form">
    @csrf
    <input type="hidden" name="item_id">
        <h3>Formulaire de réservation</h3>
        <label>Prénom:</label>
        <input type="text" name="first_name">
        <label>Nom:</label>
        <input type="text" name="last_name">
        <label>Adresse mail:</label>
        <input type="email" name="email">
        <p>
            Un email de confirmation vous sera envoyé avec les informations de paiements à réaliser dans les 7 jours qui suivent la réception de ce-dernier pour finaliser votre réservation. Au dela de ce délais, votre réservation sera annulée et l'article remis en vente.
        </p>
        <input type="submit" value="Confirmer l'inscription" class="btn-edit" id="sent">
    </form>
  </div>
</div>

@endsection
