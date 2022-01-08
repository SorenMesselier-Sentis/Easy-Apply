<nav class="navbar">
    <div>
        <a href="{{ route('home') }}"><img src="img/logo.png" alt="logo easy-apply"></a>
    </div>
    <div>
        <ul class="navbar__main-menu">
            <li><a href="{{ route('home') }}" class="left">Accueil</a></li>
            <li><a href="{{ route('dashboard') }}" class="left">Profil</a></li>
            <li><a href="" class="left">Mes offres</a></li>
        </ul>
    </div>
    <div>
        <ul>
            <li><a href="{{ route('login') }}" class="button1">Se connecter</a></li>
            <li><a href="{{ route('register') }}" class="button2">S'inscrire</a></li>
        </ul>
    </div>
</nav>