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
            Voir l'article
        </button>
    </div>
    @if( Auth::user() && Auth::user()->role=='admin') 
        <form action="/mobilier/{{ $items->id }}" method="post" class="crud">
            @csrf
            @method('delete')
            <button type="submit" class="btn-delete" onclick="return confirm('Etes-vous sur de vouloir supprimer cet article?')">
                <i class="fas fa-trash-alt"></i>Supprimer
            </button>

            <a class="btn-edit" href="{{ route('mobilier.edit', $items->id) }}">
                <i class="fas fa-edit"></i>Modifier
            </a>
        </form>
    @endif
</div>
