<?php

namespace lfa;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
      protected $table = 'persona';

    protected $fillable = [
        'NOM_PER', 'APP_PER','APM_PER','TEL_PER','EMA_PER','DIR_PER','FEC_NAC','CUENTA','CI_PER',
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
