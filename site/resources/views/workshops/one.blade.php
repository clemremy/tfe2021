@if ($workshop->active == 1)
<div class="workshop">
    <figure>
        <img src="{{ asset('images/1.jpg') }}"></img>
    </figure>
    <div class="workshop-info">
        <h2>{{$workshop->name}}</h2>
        <p>{{$workshop->description}}</p>
        <br/>

        <p class="detail">details</p>
        <br/>
        <p>Du: {{$workshop->start_date}}</p>
        <p>Au: {{$workshop->end_date}}</p>
        <p>Nombre de places totales: {{$workshop->nb_places}}</p>
        <p>Prix par personne: {{$workshop->price}}€</p>
        <br/>

        <button class="custom-button modal-btn" id="{{ $workshop->id }}" type="submit">
            Reserver
        </button>
    </div>
    @if( Auth::user() && Auth::user()->role=='admin') 
        <form action="/ateliers/{{ $workshop->id }}" method="post" class="crud">
            @csrf
            @method('delete')
            <button type="submit" class="btn-delete" onclick="return confirm('Etes-vous sur de vouloir supprimer cet atelier?')">
                <i class="fas fa-trash-alt"></i>Supprimer
            </button>

            <a class="btn-edit" href="{{ route('ateliers.edit', $workshop->id) }}">
                <i class="fas fa-edit"></i>Modifier
            </a>
        </form>
    @endif
</div>
@elseif (Auth::user() && Auth::user()->role=='admin' && $workshop->active == 0)
<div class="workshop">
    <figure>
        <img src="{{ asset('images/1.jpg') }}"></img>
    </figure>
    <div class="workshop-info">
        <h2>{{$workshop->name}}</h2>
        <p>{{$workshop->description}}</p>
        <br/>

        <p class="detail">details</p>
        <br/>
        <p>Du: {{$workshop->start_date}}</p>
        <p>Au: {{$workshop->end_date}}</p>
        <p>Nombre de places totales: {{$workshop->nb_places}}</p>
        <p>Prix par personne: {{$workshop->price}}€</p>
        <br/>

        <button class="custom-button modal-btn" id="{{ $workshop->id }}" type="submit">
            Reserver
        </button>
    </div>
    <form action="/ateliers/{{ $workshop->id }}" method="post" class="crud">
        @csrf
        @method('delete')
        <button type="submit" class="btn-delete" onclick="return confirm('Etes-vous sur de vouloir supprimer cet atelier?')">
            <i class="fas fa-trash-alt"></i>Supprimer
        </button>

        <a class="btn-edit" href="{{ route('ateliers.edit', $workshop->id) }}">
            <i class="fas fa-edit"></i>Modifier
        </a>
    </form>
</div>
@endif

