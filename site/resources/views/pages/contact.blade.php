@extends('layouts.default')

@section('content')
    <article class="contactpage">
        <div class="first-slide">
            <div class="img-background"></div>
            <span class="line one"></span>
            <span class="line two"></span>
            <div class="title">
                <h1>
                    Une question?
                </h1>
            </div>
        </div>
        <div class="container">
            <div class="info col-6">
                <address>
                    <i class="fa-lg"></i>
                    <a href="mailto:gluckdesign@gmail.com">gluckdesign@gmail.com</a>
                    <br/><br/>
                    <a href="tel:+32000000000">+32 473/930.226</a>
                </address>
                <br/>
                <address>
                    <i class="fa-lg"></i>
                    <a href="https://goo.gl/maps/uXqaj33p7eq69ZSw5">
                        28 Rue des Hannetons
                        <br/>
                        1170 Boitsfort
                        <br/>
                        Belgium
                    </a>
                </address>
            </div>
            
            <div class="contactform">
                <!-- Success message -->
                @if(Session::has('success'))
                    <div>
                        {{Session::get('success')}}
                    </div>
                @endif

                <form method="post" action="" class="contact col-6">
                @csrf
                    <p>
                        <label for="first_name">Prénom</label>
                        <input type="text" name="first_name" placeholder="Jean-Claude" required>
                    </p>
                    <p>
                        <label for="last_name">Nom</label>
                        <input type="text" name="last_name" placeholder="Van Damme" required>
                    </p>
                    <p>
                        <label for="email">Adresse mail</label>
                        <input type="text" name="email" placeholder="jcvd@mail.com" required>
                    </p>
                    <p>
                        <label for="subject">Sujet</label>
                        <select name="subject">
                            <option value="">--Choisir une option--</option>
                            <option value="rdv">Rendez-vous</option>
                            <option value="commande">Commande personnalisée</option>
                            <option value="sav">Service après vente</option>
                            <option value="autre">Autre</option>
                        </select>
                    </p>
                    <p>
                        <label for="message">Message</label>
                        <input type="textarea" name="message" placeholder="Bonjour, j'aimerais..." required>
                    </p>
                    <p class="custom-button">
                        <input type="submit" value="envoyer" class="btn">
                    </p>
                </form>
            </div>
        </div>
    </article>
@endsection