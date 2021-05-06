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
                <a href="/admins">Gérer les admins</a>
            </li>
            @endif
        </ul>
    </nav>
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Logout') }}
        </x-dropdown-link>
    </form>
@endsection
