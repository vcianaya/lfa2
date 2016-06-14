<?php

namespace lfa;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $primaryKey = 'ID_ITE';

	protected $table = 'menuitem';

    protected $fillable = [
        'NOM_PLA', 'PRE_PLA','ID_PLA','ID_MENU'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       'ID_ITE',
    ];
}
