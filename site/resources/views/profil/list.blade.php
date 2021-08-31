@extends('layouts.default')

@section('content')
<article class="profile">
    <h1>
        Les utilisateurs.
    </h1>
    @each('includes.header', $users, 'users')
</article>
@endsection