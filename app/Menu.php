<?php

namespace lfa;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $primaryKey = 'ID_MENU';

	protected $table = 'menu';

    protected $fillable = [
        'NOM_MENU', 'DES_MENU','CUENTA','created_at','updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       'ID_MENU',
    ];
}
