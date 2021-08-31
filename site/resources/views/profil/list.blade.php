@extends('layouts.default')

@section('content')
<article class="profile">
    <h1>
        Les utilisateurs.
    </h1>
    
    @each('profil.one', $users, 'users')
</article>
@endsection