@extends('layouts.default')

@section('content')
<article class="profile">
    <div class="profil">
        @if( Auth::user() && Auth::user()->role=='admin') 
            <a href="/utilisateurs" role="button" class="btn-back">Voir tous les utilisateurs</a>
        @endif
        <h3>Profil de {{Auth::user()->first_name}} {{Auth::user()->last_name}}</h3><br/>
        <label for="prenom">Prénom:</label>
        <p>{{$user->first_name}}</p><br/>
        <label for="nom">Nom:</label>
        <p>{{$user->last_name}}</p><br/>
        <label for="email">Adresse email:</label>
        <p>{{$user->email}}</p><br/>

        @if($user->newsletter==1)
            <p>Vous êtes inscrit à la newsletter</p>
        @elseif($user->newsletter==0)
            <p>Vous n'êtes pas inscrit à la newsletter</p>
        @endif
        <br/><br/>
        <div class="cta">
            <a class="btn-edit" href="/profil.edit">
                <i class="fas fa-edit"></i>&nbsp; &nbsp; Modifier
            </a>
        </div>
    </div>
    
</article>

@endsection