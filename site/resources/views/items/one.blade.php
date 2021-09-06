@if ($items->active == 1 && $items->customization == 0)
<a href="/article/{{$items->id }}">
    <div class="mobilier col-4">
        <figure>
            <img src="/images/article/{{ $items->image }}" >
        </figure>

        <br/>
        <h4>{{$items->name}}</h4>
        <p class="price">{{$items->price}}€</p>
        <p>{{$items->categories->name}}</p>
        <br/>

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
</a>
@elseif (Auth::user() && Auth::user()->role=='admin' && $items->active == 0 && $items->customization == 0)
<a href="/article/{{$items->id }}">
    <div class="mobilier unactive col-4">
        <figure>
            <img src="/images/article/{{ $items->image }}" >
        </figure>

        <br/>
        <h4>{{$items->name}}</h4>
        <p class="price">{{$items->price}}€</p>
        <p>{{$items->categories->name}}</p>
        <br/>

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
</a>
@endif