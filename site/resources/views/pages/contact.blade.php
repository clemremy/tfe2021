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
                    <a href="mailto:gluckdesign.contact@gmail.com">gluckdesign.contact@gmail.com</a>
                    <br/><br/>
                    <a href="tel:+32479459416">+32 479 45 94 16</a>
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
                <form action="/contact" method="post" class="contact col-6">
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
                            <option value="none">--Choisir une option--</option>
                            <option value="rdv">Rendez-vous</option>
                            <option value="commande">Commande personnalisée</option>
                            <option value="sav">Service après vente</option>
                            <option value="autre">Autre</option>
                        </select>
                    </p>
                    <p>
                        <label for="message">Message</label>
                        <input type="textarea" name="message" placeholder="..." required>
                    </p>
                    <input type="text" id="honeypot" value="" style="display:none">
                    <p>
                        <div class="mycheckboxes">
                            <input type="hidden" name="terms" value="1">
                            <input type="checkbox" class="checkbox" name="gdpr" value="1">
                            <label for="gdpr" class="checkboxlabel">J'ai lu et j'accepte les <a href="{{ url('/conditions-generales') }}">conditions générales</a> et la <a href="{{ url('/politique-de-confidentialite') }}">politique de confidentialité</a>.</label>
                        </div>
                    </p>
                    <input type="submit" value="Envoyer" class="btn submitcheck" id="sent">
                </form>
            </div>
        </div>
    </article>
@endsection