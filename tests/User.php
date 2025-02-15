<?php

namespace Klongchu\LaravelJitsi\Tests;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Klongchu\LaravelJitsi\Traits\HasJitsiAttributes;

class User extends Model implements AuthorizableContract, AuthenticatableContract
{
    use Authorizable, Authenticatable, HasJitsiAttributes;

    protected $guarded = [];

    protected $table = 'users';
}
