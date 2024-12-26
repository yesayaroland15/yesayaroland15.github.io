<?php

namespace App\Libraries;

use Myth\Auth\Authentication\Passwords\CompositionValidator;
use Myth\Auth\Authentication\Passwords\ValidatorInterface;
use CodeIgniter\Entity\Entity;

class CustomCompositionValidator extends CompositionValidator implements ValidatorInterface
{
    public function check(string $password, ?Entity $user = null): bool
    {
        return parent::check($password, $user);
    }
}
