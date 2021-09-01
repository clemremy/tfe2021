@extends('layouts.default')

@section('content')
<article class="profile">
    <h1>
        Mon profil.
    </h1>
    
    @each('profil.one', $users, 'users')
</article>
@endsection