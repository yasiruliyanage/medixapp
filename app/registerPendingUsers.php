<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registerPendingUsers extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'reg_id', 'nic','isregistered',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   /* protected $hidden = [
        'password', 'remember_token',
    ];*/

}
