@extends('layouts.default')

@section('content')
    <article class="contactpage">
        <div class=image>
            <img src="{{ asset('images/1.jpg') }}" style="width:100%"/>
        </div>
        <div class="text">
            <h1>
                Titre
            </h1>
            <h3>
                Une question? Une demande particuclière? Un avis?
                Écrivez-moi et je me charge du reste!
            </h3>
        </div>
        <form class="contact">
            <p>
                <label for="prenom">Prénom:</label>
                <input type="text" name="prenom" placeholder="Jean-Claude" required>
            </p>
            <p>
                <label for="nom">Nom:</label>
                <input type="text" name="nom" placeholder="Van Damme" required>
            </p>
            <p>
                <label for="email">Adresse mail:</label>
                <input type="text" name="email" placeholder="jcvd@mail.com" required>
            </p>
            <p>
                <label for="sujet">Sujet:</label>
                <select name="sujet">
                    <option value="">--Choisir une option--</option>
                    <option value="rdv">Rendez-vous</option>
                    <option value="commande">Commande personnalisée</option>
                    <option value="sav">Service après vente</option>
                    <option value="autre">Autre</option>
                </select>
            </p>
            <p>
                <label for="message">Message:</label>
                <input type="textarea" name="message" placeholder="Bonjour, j'aimerais..." required>
            </p>
        </form>
        <div class="info">
            <div>
                <i class="fa-lg"></i>
                <a href="mailto:gluckdesign@gmail.com">gluckdesign@gmail.com</a>
                <a href="tel:+32000000000">+32 000/000.000</a>
            </div>
            <div>
                <i class="fa-lg"></i>
                <a href="https://goo.gl/maps/uXqaj33p7eq69ZSw5">gluckdesign@gmail.com</a>
            </div>
        </div>
    </article>
@endsection