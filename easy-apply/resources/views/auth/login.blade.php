<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('scss/style.css')}}">
    <title>Inscription</title>
</head>
<body>
    <header>
        <div>
            <nav class="navbar">
                <div>
                    <a href=""><img src="img/logo.png" alt="logo easy-apply"></a>
                </div>
                <div>
                    <ul class="navbar__main-menu">
                        <li><a href="">Accueil</a></li>
                        <li><a href="">Profil</a></li>
                        <li><a href="">Mes offres</a></li>
                    </ul>
                </div>
            <x-guest-layout>
                <x-jet-authentication-card>
                    <x-slot name="logo">
                        <x-jet-authentication-card-logo />
                    </x-slot>

                    <x-jet-validation-errors/>

                    @if (session('status'))
                        <div>
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email" type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <div>
                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <x-jet-input id="password" type="password" name="password" required autocomplete="current-password" />
                        </div>

                        <div>
                            <label for="remember_me">
                                <x-jet-checkbox id="remember_me" name="remember" />
                                <span>{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            <x-jet-button>
                                {{ __('Log in') }}
                            </x-jet-button>
                        </div>
                    </form>
                </x-jet-authentication-card>
            </x-guest-layout>
        </div>
    </header>
</body>
</html>
