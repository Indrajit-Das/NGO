<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Ngo;
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
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'web_address' => ['required', 'string'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();


        $user=User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'password' => Hash::make($input['password']),
        ]);

        Ngo::create([
            'english_name' =>$input['name'],
            'email' =>$input['email'],
            'phone' =>$input['phone'],
            'webAddress' =>$input['web_address'],
            'regNo' =>time(),
            'user_id' =>$user->id,
            'slug' =>Str::of($user->name)->slug('-')
        ]);
        return $user;
    }
}
