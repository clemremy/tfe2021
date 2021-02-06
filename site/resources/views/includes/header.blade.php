<nav class="navbar">
    <div class="logo col-4">
        <a href="/" class="logo">
            <img src="{{ asset('images/logo_02_white.svg') }}" class="imglogo" alt="Logo Glück Design"/>
        </a>
    </div>
    <ul class="navlinks col-8">
        <li>
            <a href="/user/apropos">A propos</a>
        </li>
        <li>
            <a href="/user/contact">Contact</a>
        </li>
        <li>
            <a href="/user/ateliers">Ateliers</a>
        </li>
        <li>
            <a href="/user/produits">Produits</a>
        </li>
        <li>
            <a href="/user/profil" class="icon"><i class="fas fa-user-alt fa-lg"></i></a>
        </li>
        <li>
            <a href="/user/favoris" class="icon"><i class="fas fa-heart fa-lg"></i></a>
        </li>
        <li>
            <a href="/user/panier" class="icon"><i class="fas fa-shopping-basket fa-lg"></i></a>
        </li>  
    </ul>
    <div class="burger">
        <div class="line line1"></div>
        <div class="line line2"></div>
        <div class="line line3"></div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', nav)
    function nav(){
        const burger = document.querySelector('.burger');
        const nav = document.querySelector('.navbar');
        burger.addEventListener('click', ()=>{
            nav.classList.toggle('show')
        })
    }
</script>