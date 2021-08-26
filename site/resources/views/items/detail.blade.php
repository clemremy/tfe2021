<div class="mobilier">
    <figure>
        <img src="/image/{{ $items->image }}" style="width:200px;" >
    </figure>
    <div>
        <h2>{{$items->name}}</h2>
        <p>{{$items->description}}</p>
        <p>{{$items->price}}€</p>
        <p>{{$items->amount}} pièces</p>
        <p>Catégorie: {{$items->categories->name}}</p>
        <br/>
        <button class="custom-button modal-btn" id="{{ $items->id }}" type="submit">
            Reserver l'article
        </button>
    </div>
</div>
