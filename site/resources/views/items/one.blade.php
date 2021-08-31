@if ($items->active == 1 && $items->customization == 0)
<div class="mobilier">
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

        <a class="custom-button" href="/article/{{$items->id }}">
            Voir l'article
        </a>

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
@elseif (Auth::user() && Auth::user()->role=='admin' && $items->active == 0 && $items->customization == 0)
<div class="mobilier">
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

        <a class="custom-button" href="/article/{{$items->id }}">
            Voir l'article
        </a>

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
@endif