<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('scss/style.css')}}">
    <title>Inscription</title>
</head>
<body>
    <section class="background">
        <header>
            <div>
                <nav class="navbar">
                    <div>
                        <a href=""><img src="img/logo.png" alt="logo easy-apply"></a>
                    </div>
                    <div>
                        <ul class="navbar__main-menu">
                            <li><a href="{{ route('home') }}" class="left">Accueil</a></li>
                            <li><a href="{{ route('dashboard') }}" class="left">Profil</a></li>
                            <li><a href="" class="left">Mes offres</a></li>
                        </ul>
                    </div>
                </nav>
        </header>
        @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
        @endif
        <form method="POST" class="card2" action="{{ route('login') }}">
            @csrf
            <h2>Connectez-Vous</h2>
            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div>
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div>
                <x-jet-button>
                    {{ __('Se connecter') }}
                </x-jet-button>
                <div>
                    <label for="remember_me">
                    <div class="remember_me">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span>{{ __('Se souvenir de moi') }}</span>
                    </div>
                    </label>
                </div>

                <div class="butPw">
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                    {{ __('Mot de passe oublié ?') }}
                    </a>
                    @endif
                    <a href="{{ route('register') }}">Créer un compte</a>
                </div>
            </div>
            <section class="bottomBar">
                <div class="orBar"></div>ou<div class="orBar2"></div>
            </section>
            <a class="googleConn" href="#">Connection via Google</a>
        </form>
    </section>
    @include('partials/footer')
</body>
</html>
