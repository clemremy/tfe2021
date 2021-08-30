@extends('layouts.default')

@section('content')
<article class="profile">
    <h1>
        Les utilisateurs.
    </h1>
    @each('profil.one', $users, 'user')``
    @each('includes.header', $users, 'user')
</article>
@endsection