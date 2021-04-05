@extends('layouts.default')

@section('content')

    @each('panier.one', $reservations, 'reservation')

@endsection