<!--
<div class="workshop">
    <table>
        <tbody>
            <tr>
                <td>
                    <img src="{{ asset('images/1.jpg') }}"></img>
                </td>
                <td>
                    <h2>{{$workshop->name}}</h2>
                </td>
                <td>{{$workshop->description}}</td>
                <td>{{$workshop->start_date}}</td>
                <td>{{$workshop->end_date}}</td>
                <td>{{$workshop->nb_places}}</td>
                @if(Auth::user()->role=='admin')
                    <td>
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
                    </td>
                @endif
            </tr>
        </tbody>
    </table>
</div>
-->

<div class="workshop">
    <figure>
        <img src="{{ asset('images/1.jpg') }}"></img>
    </figure>
    <div class="workshop-info">
        <h2>{{$workshop->name}}</h2>
        <p>{{$workshop->description}}</p>
        <p>{{$workshop->start_date}}</p>
        <p>{{$workshop->end_date}}</p>
        <p>{{$workshop->nb_places}}</p>
    </div>
    @if(Auth::user()->role=='admin')
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