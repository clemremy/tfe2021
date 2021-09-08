<div class="user">
    @if ($user->role == 'admin')
    <div class="user-info">
        <tr>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->email}}</td>
        </tr>
    </div>
    @endif
</div>