@if( Auth::user() && Auth::user()->role=='admin') 
    <a href="/utilisateurs" role="button">Voir tous les utilisateurs</a>
@endif
<div class="profil">
    <h3>Porfil de {{Auth::user()->first_name}} {{Auth::user()->last_name}}</h3>
    <label for="prenom">Prénom:</label>
    <p>{{$user->first_name}}</p>
    <label for="nom">Nom:</label>
    <p>{{$user->last_name}}</p>
    <label for="email">Adresse email:</label>
    <p>{{$user->email}}</p>

    @if($user->newsletter==1)
        <p>Vous êtes inscrit à la newsletter</p>
    @elseif($user->newsletter==0)
        <p>Vous n'êtes pas inscrit à la newsletter</p>
    @endif

    <div class="cta">
        <a class="btn-edit" href="/profil.edit">
            <i class="fas fa-edit"></i>Modifier
        </a>
        <a href="/" class="btn-back">Retour</a>
    </div>
</div>