<?php

namespace App\Actions\Fortify;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Validation\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array<int, \Illuminate\Contracts\Validation\Rule|array<mixed>|string>
     */
    protected function passwordRules(): array
    {
        return [
            'required',
            'string',
            Password::min(12),
            'confirmed',
            $this->passwordComplexityRule(),
        ];
    }

    
    protected function passwordComplexityRule(): ValidationRule
    {
        return new class implements ValidationRule
        {
            public function validate(string $attribute, mixed $value, Closure $fail): void
            {
                $password = (string) $value;
                $criteriaMet = 0;
                $missingCriteria = [];

                if (preg_match('/[A-Z]/', $password)) {
                    $criteriaMet++;
                } else {
                    $missingCriteria[] = 'majuscules';
                }

                if (preg_match('/[a-z]/', $password)) {
                    $criteriaMet++;
                } else {
                    $missingCriteria[] = 'minuscules';
                }

                if (preg_match('/[0-9]/', $password)) {
                    $criteriaMet++;
                } else {
                    $missingCriteria[] = 'chiffres';
                }

                if (preg_match('/[^A-Za-z0-9]/', $password)) {
                    $criteriaMet++;
                } else {
                    $missingCriteria[] = 'caractères spéciaux';
                }

                if ($criteriaMet < 3) {
                    $needed = 3 - $criteriaMet;
                    $message = 'Le mot de passe doit contenir au moins 3 des 4 critères suivants : majuscules, minuscules, chiffres, caractères spéciaux. ';
                    $message .= 'Il manque ' . $needed . ' critère' . ($needed > 1 ? 's' : '') . ' : ' . implode(', ', $missingCriteria) . '.';
                    $fail($message);
                }
            }
        };
    }
}