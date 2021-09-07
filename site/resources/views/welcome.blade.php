@extends('layouts.default')

@section('content')
<div class="slideshow-container">
    
    <div class="title-home">
        @if(Auth::check() && Auth::user()->role=='admin')
            <p>Vous êtes connecté comme admin</p>
            @elseif(Auth::check() && Auth::user()->role=='user')
                <p>Bienvenue</p>
        @endif
        <h1 style="text-align: center">
        Des meubles<br/>remplis d'histoires
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
    <div class="item-title col-12">
        <h2>
            Nos derniers articles.
        </h2>
        <div>
            <a href="/mobilier">
                <i class="fas fa-chevron-right fa-lg"></i>
            </a>
        </div>
    </div>
    <a href="/article/{{$items->id }}" class="col-3">
        <div class="mobilier">
            <figure>
                <img src="/images/article/{{ $items->image }}" >
            </figure>
            
            <br/>
            <h4>{{$items->name}}</h4>
            <p>{{$items->price}}€</p>
            <p>{{$items->categories->name}}</p>
            <br/>
        </div>
    </a>
</div>

<div class="insert">
    <div class="about">
        <h3>
            Tout pour un style unique
        </h3>
        <p>
            En leur donnant une nouvelle vie, Glück Design revalorise des meubles oubliés pour vous afin d'en faire des pièces uniques de votre intérieur. Soucieux de l'économie durable, vous pourrez combiner chique et authenticité grâce à ces articles d'exeptions, made in Belgium.
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
    setTimeout(showSlides, 5000); // Change image every 5 seconds
    }
</script>
@endsection