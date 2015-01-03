<?php

namespace TomahawkPHP\Bundle\WebBundle\Models;

use Illuminate\Database\Eloquent\Model;
use Tomahawk\Auth\UserInterface;

class User extends Model implements UserInterface
{
    public function getAuthPassword()
    {
        return $this->getAttribute('password');
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }
}