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
                        <li><a href="" class="left">Accueil</a></li>
                        <li><a href="" class="left">Profil</a></li>
                        <li><a href="" class="left">Mes offres</a></li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li><a href="" class="button1">Se connecter</a></li>
                        <li><a href="{{ url('register') }}" class="button2">S'inscrire</a></li>
                    </ul>
                </div>
            </nav>

            <form class="card" method="POST" action="{{ route('register') }}">
                @csrf
                <h2>Inscrivez-vous</h2>
                <div>
                    <x-jet-label for="email" value="{{ __('Adresse Mail') }}" />
                    <x-jet-input id="email" type="email" name="email" :value="old('email')" required />
                </div>
                
                <div>
                    <x-jet-label for="password" value="{{ __('Mot de passe') }}" />
                    <x-jet-input id="password" type="password" name="password" required autocomplete="new-password" />
                </div>
    
                <div>
                    <x-jet-label for="password_confirmation" value="{{ __('Confirmer le mot de passe') }}" />
                    <x-jet-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
    
                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div>
                                <x-jet-checkbox name="terms" id="terms"/>
    
                                <div>
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif
    
                <div>
                    <x-jet-button>
                        {{ __('S\'inscrire') }}
                    </x-jet-button>

            <div class="flex items-center justify-end mt-4">
                    <a href="{{ route('login') }}">
                        {{ __('Déjà membre ? Se connecter') }}
                    </a>
                </div>
            </form>
        </div>
    </header>
</body>
</html>