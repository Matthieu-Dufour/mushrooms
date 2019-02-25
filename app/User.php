<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class User extends Model implements Authenticatable
{
    use BasicAuthenticatable;

    protected $fillable = ['email','password'];


    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */

    public function getRememberTokenName()
    {
        return '';
    }

    public function orders(){
        return $this->hasMany('App\Order');
    }
}
