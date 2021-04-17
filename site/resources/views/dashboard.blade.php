@extends('layouts.default')

@section('content')
    <nav class="loggedin">
        <ul>
            <li>
                You're logged in!
            </li>
            @if(Auth::user()->role=='admin')
            <li>
                <a href="#">Gerer les utilisateurs</a>
            </li>
            <li>
                <a href="#">Gerer les ateliers</a>
            </li>
            <li>
                <a href="#">Gerer les articles</a>
            </li>
            @endif
        </ul>
    </nav>
@endsection
