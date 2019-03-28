<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ChristianKuri\LaravelFavorite\Traits\Favoriteable;

class Mushroom extends Model
{
    use Favoriteable;

    protected $fillable = ['name',
                            'nameLatin',
                            'surnom',
                            'odeur',
                            'comestible',
                            'ecologie',
                            'chapeau',
                            'lames',
                            'pied',
                            'chair',
                            'type_trophique',
                            'groupe',
                            'image',];

    public function confusions(){
        return $this->belongsToMany('App\Mushroom', 'confusions', 'mushroom1_id', 'mushroom2_id');
    }
    
    public function hasAnyConfusion($confusions)
    {
        if (is_array($confusions)) {
            foreach ($confusions as $confusion) {
                if ($this->hasConfusion($confusion)) {
                    return true;
                }
            }
        } else {
            if ($this->hasConfusion($confusion)) {
                return true;
            }
        }
        return false;
    }
    
    public function hasConfusion($confusion)
    {
        if($this->confusions()->whereNotNull('mushroom2_id')->first()){
            return true;
        }
        return false;
    }


}


            