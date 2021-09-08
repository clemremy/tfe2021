@if ($workshop->active == 1)
<div class="workshop">
    <figure>
        <img src="/images/atelier/{{ $workshop->image }}" >
    </figure>
    <div class="workshop-info">
        <h3>{{$workshop->name}}</h3>
        <p>{{$workshop->description}}</p>
        <br/>

        <p class="detail">details</p>
        <br/>
        <p>Du {{date('d-m-Y', strtotime($workshop->start_date))}} au {{date('d-m-Y', strtotime($workshop->end_date))}}</p>
        <p>Nombre de places totales: {{$workshop->nb_places}}</p>
        <p>Prix par personne: {{$workshop->price}}€</p>
        <br/>

        @if( ! Auth::check())
        <a href="/login" class="custom-button">
            Réserver
        </a>
        @elseif( Auth::check())
        <button class="custom-button modal-btn" id="{{ $workshop->id }}" type="submit">
            Reserver
        </button>
        @endif
    </div>
    @if( Auth::user() && Auth::user()->role=='admin') 
        <form action="/ateliers/{{ $workshop->id }}" method="post" class="crud">
            @csrf
            @method('delete')
            <button type="submit" class="btn-delete" onclick="return confirm('Etes-vous sur de vouloir supprimer cet atelier?')">
                <i class="fas fa-trash-alt"></i>
            </button>

            <a class="btn-edit" href="{{ route('ateliers.edit', $workshop->id) }}">
                <i class="fas fa-edit"></i>
            </a>
        </form>
    @endif
</div>
@elseif (Auth::user() && Auth::user()->role=='admin' && $workshop->active == 0)
<div class="workshop unactive">
    <figure>
        <img src="{{ asset('images/1.jpg') }}"></img>
    </figure>
    <div class="workshop-info">
        <h3>{{$workshop->name}}</h3>
        <p>{{$workshop->description}}</p>
        <br/>

        <p class="detail">details</p>
        <br/>
        <p>Du {{date('d-m-Y', strtotime($workshop->start_date))}} au {{date('d-m-Y', strtotime($workshop->end_date))}}</p>
        <p>Nombre de places totales: {{$workshop->nb_places}}</p>
        <p>Prix par personne: {{$workshop->price}}€</p>
        <br/>

        @if( ! Auth::check())
        <a href="/login" class="custom-button">
            Réserver
        </a>
        @elseif( Auth::check())
        <button class="custom-button modal-btn" id="{{ $workshop->id }}" type="submit">
            Reserver
        </button>
        @endif
    </div>
    <form action="/ateliers/{{ $workshop->id }}" method="post" class="crud">
        @csrf
        @method('delete')
        <button type="submit" class="btn-delete" onclick="return confirm('Etes-vous sur de vouloir supprimer cet atelier?')">
            <i class="fas fa-trash-alt"></i>
        </button>

        <a class="btn-edit" href="{{ route('ateliers.edit', $workshop->id) }}">
            <i class="fas fa-edit"></i>
        </a>
    </form>
</div>
@endif

