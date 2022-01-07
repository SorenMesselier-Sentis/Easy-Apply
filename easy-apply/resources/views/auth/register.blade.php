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
    <header>
        <div>
            @include('partials/navbar');
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

                    <a href="{{ route('login') }}">
                        {{ __('Déjà membre ? Se connecter') }}
                    </a>
                </div>
            </form>
        </div>
    </header>
    @include('partials/footer')
</body>
</html>