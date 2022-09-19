<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
         protected $fillable = [
        'first_name',
        'last_name',      
        'email', 
        'password', 
        'hidden', 
        'type', 
        'sale_point_id', 
        'referal_id', 
        'email_sent', 
        'loggedin', 
        'status', 
        'created_by', 
        'updated_by'
    ];

   
     /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime:d-M-Y',
        'updated_at' => 'datetime:d-M-Y'
    ];
     /**
     * The attributes dates that should be added.
     *
     * @var array
     */
    protected $dates = [
        'deleted_at'
    ];


}
