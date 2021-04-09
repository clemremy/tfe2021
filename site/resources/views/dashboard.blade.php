@extends('layouts.default')

@section('content')
    <nav class="loggedin">
        <ul>
            <li>
                You're logged in!
            </li>
            @if(Auth::user()->role=='user')
            <li>
                <a href="#">Gerer les utilisateurs</a>
            </li>
            @endif
            <li>
                <a href="#">Gerer les ateliers</a>
            </li>
            <li>
                <a href="#">Gerer les articles</a>
            </li>
            <li>
                <a href="#">Voir le site</a>
            </li>
        </ul>
    </nav>
@endsection
