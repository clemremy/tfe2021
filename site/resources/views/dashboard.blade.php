@extends('layouts.default')

@section('content')
    <nav class="loggedin">
        <ul>
            <li>
                You're logged in!
            </li>
            @if(Auth::user()->role=='admin')
            <li>
                <a href="/utilisateurs">Gerer les utilisateurs</a>
            </li>
            <li>
                <a href="/admins">Gérer les admins</a>
            </li>
            @endif
        </ul>
    </nav>
@endsection
