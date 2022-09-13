<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class SalepointMaster extends Model
{
     use SoftDeletes;
     
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
        'created_at' ,
        'updated_at' 
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
