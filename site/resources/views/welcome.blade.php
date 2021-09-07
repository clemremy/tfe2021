@extends('layouts.default')

@section('content')
<div class="slideshow-container">
    
    <div class="title-home">
        @if(Auth::check() && Auth::user()->role=='admin')
            <p>Vous êtes connecté comme admin</p>
            @elseif(Auth::check() && Auth::user()->role=='user')
                <p>Bienvenue</p>
        @endif
        <h1>
            Du mobilier unique.
        </h1>
    </div>
    
    <div>
        <span class="dot one"></span> 
        <span class="dot two"></span> 
        <span class="dot three"></span> 
    </div>

    <!-- scroll -->
    <div class="scrollone">
        <div class="scroll-indicator">
            <div class="scroll">
                <div class="scroll-line"></div>
            </div>
            <span>Scroll</span>
        </div>
    </div>
    <!-- end of scroll-->

    <div class="mySlides fade">
        <img src="{{ asset('images/1.jpg') }}" style="width:100%" class="bgone"/>
    </div>

    <div class="mySlides fade">
        <img src="{{ asset('images/2b.jpg') }}" style="width:100%" class="bgtwo"/>
    </div>

    <div class="mySlides fade">
        <img src="{{ asset('images/3.jpg') }}" style="width:100%" class="bgthree"/>
    </div>
</div>

<div class="lastitems">
    <h2>
        Nos derniers articles.
    </h2>
    <div>
        <div class="mobilier-home">
            <figure>
                <img src="/images/article/{{ $items->image }}" style="width:200px;" >
            </figure>
            <div>
                <h4>{{$items->name}}</h4>
                <p>{{$items->price}}€</p>
                <p>{{$items->categories->name}}</p>
                <br/>

                <a class="custom-button" href="/article/{{$items->id }}">
                    Voir l'article
                </a>
            </div>
        </div>
    </div>
    <a href="/mobilier" class="more">Voir plus d'articles</a>
</div>

<div class="insert">
    <div class="about">
        <h3>
            Tout pour un style unique
        </h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
        <br/>
        <a href="/a-propos" class="custom-button">découvrir</a>
    </div>
</div>


<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
    }
</script>
@endsection