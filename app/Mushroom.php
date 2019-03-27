<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mushroom extends Model
{
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

    // public function comestibilte()
    // {
    //     return $this->hasOne('App\Comestibilite');
    // }

    // public function ecologie()
    // {
    //     return $this->hasMany('App\Ecologie');
    // }

    // public function odeur()
    // {
    //     return $this->hasMany('App\Odeur');
    // }

    // public function typeTrophique()
    // {
    //     return $this->hasOne('App\TypeTrophique');
    // }

    // public function groupe()
    // {
    //     return $this->hasOne('App\Groupe');
    // }
}


            