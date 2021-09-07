<div class="user">
    <div class="user-info">
        <tr>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->newsletter}}</td>
            <td>
                <form action="/utilisateurs/{{ $user->id }}" method="post" class="crud">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn-delete" onclick="return confirm('Etes-vous sur de vouloir supprimer cet utilisateur?')">
                        <i class="fas fa-trash-alt"></i>
                    </button>

                    <a class="btn-edit" href="{{ route('utilisateurs.edit', $user->id) }}">
                        <i class="fas fa-edit"></i>
                    </a>
                </form>
            </td>
        </tr>
    </div>
</div>


