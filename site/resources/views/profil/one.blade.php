<div class="profil">
    <p>{{$user->first_name}}</p>
    <p>{{$user->last_name}}</p>
    <p>{{$user->email}}</p>

    @if($user->newsletter==1)
        <p>Vous êtes inscrit à la newsletter</p>
    @else
        <p>Vous n'êtes pas inscrit à la newsletter</p>
    @endif
</div>