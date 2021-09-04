<div class="booking">
    <tr>
        <td>{{$booking->id}}</td>
        <td>{{$booking->user->last_name}} {{$booking->user->first_name}}</td>
        <td>{{$booking->item->name}}</td>
        <td>{{$booking->item->price}}</td>
        <td>
            <?php echo ( $booking->item->price / 100 ) * 15; ?>€
        </td>
        
        <td>
            @if ($booking->advance == 1)
            Oui
            @elseif ($booking->advance == 0)
            Non
            @endif
        </td>
        <td>
            @if ($booking->paid == 1)
            Oui
            @elseif ($booking->paid == 0)
            Non
            @endif
        </td>
        <td>
            <form action="/reservation/{{ $booking->id }}" method="post" class="crud">
                @csrf
                @method('delete')
                <button type="submit" class="btn-delete" onclick="return confirm('Etes-vous sur de vouloir supprimer cette réservation?')">
                    <i class="fas fa-trash-alt"></i>Supprimer
                </button>

                <a class="btn-edit" href="{{ route('reservation.edit', $booking->id) }}">
                    <i class="fas fa-edit"></i>Modifier
                </a>
            </form>
        </td>
    </tr>
</div>