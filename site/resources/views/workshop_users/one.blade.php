<div class="workshopuser">
    <tr>
        <td>{{$workshop_user->users_id}}</td>
        <td>{{$workshop_user->workshops_id}}</td>
        <td>{{$workshop_user->nb_persons}}</td>
        <td>
            <form action="/inscription/{{ $workshop_user->id }}" method="post" class="crud">
                @csrf
                @method('delete')
                <button type="submit" class="btn-delete" onclick="return confirm('Etes-vous sur de vouloir supprimer cette inscription?')">
                    <i class="fas fa-trash-alt"></i>Supprimer
                </button>

                <a class="btn-edit" href="{{ route('inscription.edit', $workshop_user->id) }}">
                    <i class="fas fa-edit"></i>Modifier
                </a>
            </form>
        </td>
    </tr>
</div>


