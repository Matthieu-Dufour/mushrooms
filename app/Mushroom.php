<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mushroom extends Model
{


    protected $fillable = ['name',
                            'nameLatin',
                            'odeur',
                            'comestible',
                            'ecologie',
                            'chapeau',
                            'lames',
                            'pied',
                            'chair',
                            'sporee',];


    
}


            