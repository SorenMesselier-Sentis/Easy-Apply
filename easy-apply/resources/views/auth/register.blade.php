<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="first_name" value="{{ __('Prénom') }}" />
                <x-jet-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name" />
            </div>

            <div>
                <x-jet-label for="last_name" value="{{ __('Nom') }}" />
                <x-jet-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" />
            </div>

            <div>
                <x-jet-label for="birth_date" value="{{ __('Date de Naissance') }}" />
                <x-jet-input id="birth_date" class="block mt-1 w-full" type="text" name="birth_date" :value="old('birth_date')" required autofocus autocomplete="birth_date" />
            </div>

            <div>
                <x-jet-label for="website" value="{{ __('Site internet') }}" />
                <x-jet-input id="website" class="block mt-1 w-full" type="text" name="website" :value="old('website')" required autofocus autocomplete="website" />
            </div>

            <div>
                <x-jet-label for="phone" value="{{ __('Telephone') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            </div>

            <div>
                <x-jet-label for="cv" value="{{ __('CV') }}" />
                <x-jet-input id="cv" class="block mt-1 w-full" type="text" name="cv" :value="old('cv')" required autofocus autocomplete="cv" />
            </div>

            <div>
                <x-jet-label for="picture" value="{{ __('Photo de Profil') }}" />
                <x-jet-input id="picture" class="block mt-1 w-full" type="text" name="picture" :value="old('picture')" required autofocus autocomplete="picture" />
            </div>

            <div>
                <x-jet-label for="grade" value="{{ __('Niveau d etudes') }}" />
                <x-jet-input id="grade" class="block mt-1 w-full" type="text" name="grade" :value="old('grade')" required autofocus autocomplete="grade" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            
            <div class="mt-4">
                <x-jet-label for="facebook" value="{{ __('Facebook') }}" />
                <x-jet-input id="facebook" class="block mt-1 w-full" type="facebook" name="facebook" required autocomplete="facebook" />
            </div>
            
            <div class="mt-4">
                <x-jet-label for="linked_in" value="{{ __('Linked In') }}" />
                <x-jet-input id="linked_in" class="block mt-1 w-full" type="linked_in" name="linked_in" required autocomplete="linked_in" />
            </div>
            
            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>
            
            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
