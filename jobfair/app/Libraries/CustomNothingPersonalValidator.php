<?php

namespace App\Libraries;

use Myth\Auth\Authentication\Passwords\NothingPersonalValidator;
use Myth\Auth\Authentication\Passwords\ValidatorInterface;
use CodeIgniter\Entity\Entity;

class CustomNothingPersonalValidator extends NothingPersonalValidator implements ValidatorInterface
{
    public function check(string $password, ?Entity $user = null): bool
    {
        return parent::check($password, $user);
    }
}
