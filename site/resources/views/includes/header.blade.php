<nav class="navbar">
    <div class="logo col-4">
        <a href="/" class="logo">
            <img src="{{ asset('images/logo_02_white.svg') }}" class="imglogo" alt="Logo Glück Design"/>
        </a>
    </div>
    <ul class="navlinks col-8">
        <li>
            <a href="{{ url('/a-propos') }}">A propos</a>
        </li>
        <li>
            <a href="{{ url('/contact') }}">Contact</a>
        </li>
        <li>
            <a href="/ateliers">Atelier</a>
        </li>
        <li>
            <a href="{{ url('/mobilier-accueil') }}">Mobilier</a>
        </li>
        
        @if (!Auth::check())
        <li>
            <a href="/login">Connexion</a>
        </li>
        @endif

        @if(Auth::check())
        <li>
            <a href="/profil" class="icon"><i class="far fa-user fa-lg"></i></a>
        </li>
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Logout') }}
                </x-dropdown-link>
            </form>
        </li>
        @endif
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