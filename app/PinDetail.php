<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PinDetail extends Model
{
     protected $fillable = [
        'pin_no',        
        'serial_no', 
        'generated_no',     
        'user_id',     
        'created_by', 
        'updated_by'
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' ,
        'updated_at' 
    ];
}
