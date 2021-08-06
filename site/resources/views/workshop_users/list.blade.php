@extends('layouts.default')

@section('content')
<article class="atelier_utilisateur">
    <h1>
        Inscription aux ateliers.
    </h1>
    
    <div class="cta">
        <a href="/ateliers" class="btn-back">Retour aux ateliers</a>
    </div>
    @each('workshop_users.one', $workshop_users, 'workshop_user')
</article>
@endsection
