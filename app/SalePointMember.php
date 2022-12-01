<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalePointMember extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
         protected $fillable = [                  
                    'name',
                    'date',
                    'dob',
                    'age',
                    'gender',
                    'address',
                    'pincode',
                    'city',
                    'state',
                    'mobile',
                    'aadhaar_no',
                    'acc_holder_name',
                    'acc_no',
                    'ifsc_code',
                    'branch_name',
                    'bank_name',
                    's_no',
                    'pin_no',
                    'sponsor_id',
                    'nominee_name',
                    'nominee_reltnshp',
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
