<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    public function create(array $input): User
    {
        $isAdmin = $this->isAdminEmail($input['email']);
        
        $validationRules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ];

        if ($isAdmin) {
            $validationRules['admin_password'] = ['required', 'string'];
        }

        Validator::make($input, $validationRules, [
            'admin_password.required' => 'Le mot de passe administrateur est requis pour créer un compte admin.',
            'password.required' => 'Le mot de passe est requis.',
            'password.min' => 'Le mot de passe doit contenir au moins 12 caractères.',
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
        ])->after(function ($validator) use ($input, $isAdmin) {
            if ($isAdmin && !$this->validateAdminPassword($input['admin_password'] ?? '')) {
                $validator->errors()->add('admin_password', 'Mot de passe administrateur incorrect.');
            }
        })->validate();

        $user = new User();
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = $input['password'];
        $user->role = $isAdmin ? User::ROLE_ADMIN : User::ROLE_USER;
        $user->save();

        return $user;
    }

    private function isAdminEmail(string $email): bool
    {
        $adminDomain = env('ADMIN_EMAIL_DOMAIN');
        
        if (empty($adminDomain) || !is_string($adminDomain)) {
            return false;
        }
        
        $adminDomain = trim($adminDomain);
        
        if (!str_starts_with($adminDomain, '@')) {
            $adminDomain = '@' . $adminDomain;
        }
        
        return str_ends_with(strtolower($email), strtolower($adminDomain));
    }

    private function validateAdminPassword(string $password): bool
    {
        $adminPassword = env('MDP');
        
        if (empty($adminPassword) || !is_string($adminPassword)) {
            return false;
        }
        
        return $password === $adminPassword;
    }
}