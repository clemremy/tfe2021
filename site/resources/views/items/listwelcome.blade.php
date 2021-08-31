@extends('layouts.default')

@section('content')
<article class="item">
    @each('welcome', $items, 'items');
</article>

@endsection
