<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'birth_date' => ['required', 'dateTime'],
            'website' => ['nullable', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'cv' => ['required', 'string', 'max:255'],
            'picture' => ['required', 'mimes:jpg,jpeg,png', 'max:1024'],
            'grade' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'facebook' => ['nullable', 'string', 'max:255'],
            'linked_in' => ['nullable', 'string', 'max:255'],
            'localisation' => ['required', 'string', 'max:255'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            'birth_date' => $input['birth_date'],
            'website' => $input['website'],
            'phone' => $input['phone'],
            'cv' => $input['cv'],
            'picture' => $input['picture'],
            'grade' => $input['grade'],
            'email' => $input['email'],
            'facebook' => $input['facebook'],
            'linked_in' => $input['linked_in'],
            'localisation' => $input['localisation'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
