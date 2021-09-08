<div class="user">
    @if ($user->newsletter == 1)
    <div class="user-info">
        <tr>
            <td>{{$user->email}}</td>
        </tr>
    </div>
    @endif
</div>