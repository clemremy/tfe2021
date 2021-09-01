@extends('layouts.default')

@section('content')
<div class="article">
    <figure>
        <img src="/images/article/{{ $item->image }}" style="width:200px;" >
    </figure>
    <div>
        <h2>{{$item->name}}</h2>
        <p>{{$item->description}}</p>
        <p>{{$item->price}}€</p>
        <p>{{$item->amount}} pièces</p>
        <p>Catégorie: {{$item->categories->name}}</p>
        <br/>
        @if( ! Auth::check() )
        <a href="/login" class="custom-button">
            Réserver l'article
        </a>
        @elseif( Auth::check() && $item->customization == 0)
        <button class="custom-button modal-btn" id="{{ $item->id }}" type="submit">
            Réserver l'article
        </button>
        @elseif( Auth::check() && $item->customization == 1)
        <a href="/contact" class="custom-button">
            Interessé? Contactez-moi!
        </a>
        @endif
        <div class="cta">
            <a href="{{ url()->previous() }}" class="btn-back">Annuler</a>
        </div>
    </div>
</div>


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
        <input type="text" name="first_name" required>
        <label>Nom:</label>
        <input type="text" name="last_name" required>
        <label>Adresse mail:</label>
        <input type="email" name="email" required>
        <label>Acompte à payer:</label>
        <p>
        <?php $accompte = ( $item->price / 100 ) * 15; 
        echo $accompte ?>€
        </p>
        <input type="hidden" name="datetime">

        <p>Un email de confirmation vous sera envoyé avec les informations de paiements à réaliser dans les 7 jours qui suivent la réception de ce-dernier pour finaliser votre réservation. Au dela de ce délais, votre réservation sera annulée et les biens remis en vente.
          
          <br/><br/>
          <div class="mycheckboxes">
           <input name="terms" type="hidden" value="1">
            <input type="checkbox" class="checkbox" name="gdpr" value="1">
            <label for="gdpr" class="checkboxlabel">J'ai lu et j'accepte les <a href="{{ url('/conditions-generales') }}">conditions générales</a> et la <a href="{{ url('/politique-de-confidentialites') }}">politique de confidentialité</a>.</label>
          </div>
        </p>
        <input type="submit" value="Confirmer la réservation" class="btn-edit submitcheck" id="sent">
    </form>
  </div>
</div>
@endsection