@extends('layouts.default')

@section('content')
    <article class="apropospage col-12">
        <div class="first-slide">
            <div class="img-background"></div>
            <span class="line one"></span>
            <span class="line two"></span>
            <div class="title">
                <h1>
                    Glück Design  
                    <br />
                    Souligner l'humanité d'une seconde chance.</h1>
            </div>
        </div>
        <div class="container">
            <div class="history">
                <div class="author col-6">
                    <h2>
                        Valentine
                    </h2>
                    <figure>
                        <img src="{{ asset('images/1.jpg') }}" alt="" >
                        <svg width="150" height="150" class="rotating-text">
                            <path id="curve" fill="transparent" 
                            d="
                                M 37.5, 75
                                a 37.5,37.5 0 1,1 75,0
                                a 37.5,37.5 0 1,1 -75,0
                            " />
                            <text width="1000" font-size="1em" class="svg-text" >
                                <textPath xlink:href="#curve" >
                                    fondatrice - fondatrice -  
                                </textPath>
                            </text>
                        </svg>
                    </figure>
                </div>
                <div class="text col-6">
                    <p>
                        Passionnée par le bricolage depuis qu’elle est en âge de tenir un tournevis, Valentine Van Gestel s’est pourtant d’abord illustrée durant 20 ans dans une autre passion : le journalisme. 
                        <br /><br />
                        En 2018, conscientisée par l’importance de changer de mode de vie urgemment, elle adopte les philosophies de la permaculture et du zéro-déchet. Grâce à ses 5 années de formation auprès de son acolyte Robert dans l’émission ‘Une Brique dans le Ventre’, elle développe sa passion pour l’upcycling. 
                        <br /><br />
                        En 2020, elle trouve sa voie en réalisant toute la décoration d’intérieur du nouveau café-cantine Al&Greta en retapant avec amour des meubles destinés… aux encombrants ! 
                        <br /><br />
                        En 2021, elle crée Glück Design, société de revalorisation de meubles oubliés, qui respecte ses valeurs de respect de l’environnement, en s’inscrivant dans l’économie circulaire, durable et éco-responsable ; et souligne l’humanité d’une seconde chance. 
                    </p>
                </div>
            </div>
            <div class="galerie">
                <ul class="col-12">
                    <li class="col-6">
                        <img src="{{ asset('images/1.jpg') }}" />
                    </li>
                    <li class="col-6">
                        <img src="{{ asset('images/2b.jpg') }}" />
                    </li>
                    <li class="col-6">
                        <img src="{{ asset('images/3.jpg') }}" />
                    </li>
                    <li class="col-6">
                        <img src="{{ asset('images/1.jpg') }}" />
                    </li>
                </ul>
            </div>
            <form class="newsletter" >
                <label>Restez informé</label>
                <br/>
                <p>
                <input type="email" name="email" value="" placeholder="catherinemoulin@gmail.com" >
                <input type="submit" value="&#10230;">
                </p>
            </form>
        </div>
    </article>
@endsection