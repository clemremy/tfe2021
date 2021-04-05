@extends('layouts.default')

@section('content')

    @each('profil.one', $utilisateurs, 'utilisateur')

@endsection