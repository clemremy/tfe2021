@extends('layouts.default')

@section('content')
<article class="atelier">
    <h1>
        Nos ateliers.
    </h1>
    <a href="/ateliers/create" class="add" role="button">Ajouter</a>
    @each('workshops.one', $workshops, 'workshop')
</article>

@endsection

<style>
    .atelier{
        padding-top: 10rem;
    }
</style>