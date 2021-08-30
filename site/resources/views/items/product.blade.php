<form action="/article/{{ $item->id }}" method="post">
<div class="article">
    <figure>
        <img src="/images/article/{{ $items->image }}" style="width:200px;" >
    </figure>
    <div>
        <h2>{{$items->name}}</h2>
        <p>{{$items->description}}</p>
        <p>{{$items->price}}€</p>
        <p>{{$items->amount}} pièces</p>
        <p>Catégorie: {{$items->categories->name}}</p>
        <br/>
        <button class="custom-button modal-btn" id="{{ $items->id }}" type="submit">
            Réserver l'article
        </button>
    </div>
</div>
</form>
