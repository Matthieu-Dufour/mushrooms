<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;
use ChristianKuri\LaravelFavorite\Traits\Favoriteability;

class User extends Model implements Authenticatable
{
    use BasicAuthenticatable;
    use Favoriteability;

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

    public function roles(){
        return $this->belongsToMany('App\Role', 'user_role', 'user_id', 'role_id');
    }

    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($role)) {
                return true;
            }
        }
        return false;
    }

    public function hasRole($role)
    {
        if($this->roles()->where('name', $role)->first()){
            return true;
        }
        return false;
     }
}
