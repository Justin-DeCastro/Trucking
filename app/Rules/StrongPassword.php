<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class StrongPassword implements Rule
{
    protected $name;
    protected $email;

    public function __construct($name, $email)
    {
        $this->name = strtolower($name);
        $this->email = strtolower($email);
    }

    public function passes($attribute, $value)
    {
        // Convert password to lowercase for comparison
        $password = strtolower($value);

        // Check if the password is similar to the name or email
        return !($password === $this->name || $password === $this->email || strpos($password, $this->name) !== false || strpos($password, $this->email) !== false);
    }

    public function message()
    {
        return 'The :attribute cannot be your name or email address, or contain them.';
    }
}
