<div class="category">
    <div>
        <h2>{{$categories->name}}</h2>
    </div>
    @if( Auth::user() && Auth::user()->role=='admin') 
        <form action="/categorie/{{ $categories->id }}" method="post" class="crud">
            @csrf
            @method('delete')
            <button type="submit" class="btn-delete" onclick="return confirm('Etes-vous sur de vouloir supprimer cette catégorie?')">
                <i class="fas fa-trash-alt"></i>Supprimer
            </button>

            <a class="btn-edit" href="{{ route('categorie.edit', $categories->id) }}">
                <i class="fas fa-edit"></i>Modifier
            </a>
        </form>
    @endif
</div>
