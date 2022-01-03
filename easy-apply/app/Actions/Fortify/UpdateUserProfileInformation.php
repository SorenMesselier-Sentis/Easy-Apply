<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
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
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'facebook' => ['nullable', 'string', 'max:255'],
            'linked_in' => ['nullable', 'string', 'max:255'],
            'localisation' => ['required', 'string', 'max:255'],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'birth_date' => ['required', 'dateTime'],
                'website' => ['string', 'max:255'],
                'phone' => ['required', 'string', 'max:255'],
                'cv' => ['required', 'string', 'max:255'],
                'picture' => ['required', 'mimes:jpg,jpeg,png', 'max:1024'],
                'grade' => ['required', 'string', 'max:255'],
                'email' => $input['email'],
                'facebook' => ['nullable', 'string', 'max:255'],
                'linked_in' => ['nullable', 'string', 'max:255'],
                'localisation' => ['required', 'string', 'max:255'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
