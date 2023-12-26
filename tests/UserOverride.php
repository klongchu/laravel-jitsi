<?php

namespace Klongchu\LaravelJitsi\Tests;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Klongchu\LaravelJitsi\Traits\HasJitsiAttributes;

class UserOverride extends Model implements AuthorizableContract, AuthenticatableContract
{
    use Authorizable, Authenticatable, HasJitsiAttributes;

    protected $guarded = [];

    protected $table = 'users';

    /**
     * Override HasJitsiAttributes method
     *
     * @return string
     */
    public function getJitsiName()
    {
        return 'fake name';
    }

    /**
     * Override HasJitsiAttributes method
     *
     * @return string
     */
    public function getJitsiEmail()
    {
        return 'fake-email@example.com';
    }

    /**
     * Override HasJitsiAttributes method
     *
     * @return string
     */
    public function getJitsiAvatar()
    {
        return 'https://picsum.photos/100';
    }
}
