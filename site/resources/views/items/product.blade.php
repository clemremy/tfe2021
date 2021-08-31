@extends('layouts.default')

@section('content')
<form action="article/{{ $item->id }}" method="post">
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
            <button class="custom-button modal-btn" id="{{ $item->id }}" type="submit">
                Réserver l'article
            </button>
        </div>
    </div>
</form>
@endsection