@extends('layouts.default')

@section('content')
<div class="article">
    <figure class="col-6">
        <img src="/images/article/{{ $item->image }}">
    </figure>
    <div class="product col-6">
        <div class="product-title">
            <h3>{{$item->name}}</h3>
            <br/>
            <p>{{$item->price}}€</p>
        </div>

        <div class="product-info">
            <span class="line"></span>
            <p>{{$item->amount}} pcs.</p>
            <p>{{$item->categories->name}}</p>
            <br/>
            <p>{{$item->description}}</p>
        </div>

        @if( ! Auth::check() && $item->customization == 0)
        <a href="/login" class="custom-button">
            Réserver
        </a>
        @elseif( Auth::check() && $item->customization == 0)
        <button class="custom-button modal-btn" id="{{ $item->id }}" type="submit">
            Réserver
        </button>
        @endif
        @if( $item->customization == 1)
        <a href="/contact" class="custom-button">
            Interessé?
        </a>
        @endif
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
        <h3>Réserver</h3>
        <label>Adresse mail:</label>
        @if ( Auth::check() )
        <input type="email" name="email" value="{{ Auth::user()->email }}" required>
        @endif
        <p>
            <label>Acompte à payer:</label>
            <?php $accompte = ( $item->price / 100 ) * 15; 
            echo $accompte ?>€
        </p>
        <br/>
        
        <input type="text" id="honeypot" value="" style="display:none">

        <p>
            Un email de confirmation vous sera envoyé avec les informations de paiements à réaliser dans les 7 jours qui suivent la réception de ce-dernier pour finaliser votre réservation. Au dela de ce délais, votre réservation sera annulée et les biens remis en vente.

            <br/><br/>
            <sup>* Sous réserve du stock disponible.</sup>
        </p>
        <input type="submit" value="Confirmer la réservation" class="custom-button" id="sent">
    </form>
  </div>
</div>
@endsection