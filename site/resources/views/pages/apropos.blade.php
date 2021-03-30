@extends('layouts.default')

@section('content')
    <article class="apropospage col-12">
        <div class="title">
            <h1>Glück Design</h1>  <br />
            <h1>Souligner l'humanité d'une seconde chance.</h1>
        </div>
        <div class="history">
            <div class="author">
                <figure>
                    <img src="{{ asset('images/1.jpg') }}" alt="" style="width: 300px;"></img>
                </figure>
                <p class="rotatingtext">
                    fondatrice - fondatrice -
                </p>
            </div>
            <div class="text">
                <p>
                    Passionnée par le bricolage depuis qu’elle est en âge de tenir un tournevis, Valentine Van Gestel s’est pourtant d’abord illustrée durant 20 ans dans une autre passion : le journalisme. 
                    En 2018, conscientisée par l’importance de changer de mode de vie urgemment, elle adopte les philosophies de la permaculture et du zéro-déchet. Grâce à ses 5 années de formation auprès de son acolyte Robert dans l’émission ‘Une Brique dans le Ventre’, elle développe sa passion pour l’upcycling. 
                    En 2020, elle trouve sa voie en réalisant toute la décoration d’intérieur du nouveau café-cantine Al&Greta en retapant avec amour des meubles destinés… aux encombrants ! 
                    En 2021, elle crée Glück Design, société de revalorisation de meubles oubliés, qui respecte ses valeurs de respect de l’environnement, en s’inscrivant dans l’économie circulaire, durable et éco-responsable ; et souligne l’humanité d’une seconde chance. 
                </p>
            </div>
        </div>
        <div class="galerie">
            <div>
                <figure class="small">
                    <img src="{{ asset('images/1.jpg') }}" />
                </figure>
                <figure class="big">
                    <img src="{{ asset('images/1.jpg') }}" />
                </figure>
            </div>
            <div>
                <figure class="big">
                    <img src="{{ asset('images/1.jpg') }}" />
                </figure>
                <figure class="small">
                    <img src="{{ asset('images/1.jpg') }}" />
                </figure>
            </div>
        </div>
        <form class="newsletter">
            <label>Restez informé</label>
            <br/>
            <input type="email" name="email" value="" placeholder="catherinemoulin@gmail.com">
        </form>
    </article>
@endsection
