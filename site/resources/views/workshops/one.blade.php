<div>
    <table>
        <tbody>
            <tr>
                <td>
                    <h2>{{$workshop->name}}</h2>
                </td>
                <td>{{$workshop->description}}</td>
                <td>{{$workshop->start_date}}</td>
                <td>{{$workshop->end_date}}</td>
                <td>{{$workshop->nb_places}}</td>
                @if(Auth::user()->role=='admin')
                    <td>
                        <form action="/ateliers/{{ $workshop->id }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Supprimer" onclick="return confirm('Etes-vous sur de vouloir supprimer cet atelier?')">
                            <button type="submit" class="btn-delete" onclick="return confirm('Etes-vous sur de vouloir supprimer cet atelier?')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <a href="{{ route('ateliers.edit', $workshop->id) }}" class="btn-edit">Modifier</a>
                        </form>
                    </td>
                @endif
            </tr>
        </tbody>
    </table>
</div>