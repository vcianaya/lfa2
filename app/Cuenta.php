<?php

namespace lfa;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Cuenta extends Authenticatable
{
      protected $table = 'cuenta';

    protected $fillable = [
        'NICK', 'password','NIVEL','created_at','updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       'id',
    ];
}
