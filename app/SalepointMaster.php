<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalepointMaster extends Model
{
    protected $table = 'sale_points';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
         protected $fillable = [
        'name',        
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
