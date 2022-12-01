<?php

namespace App\Services; 
use Illuminate\Support\Facades\Hash;
use App\PinDetail; 
use App\User; 
use Log; 
use Carbon\Carbon;

class PinDetailService {

	public function store($params){
       
        $total = $params['total_pin'];
        $data['user_id'] = $params['user_id'];      
      
       for ($i=0; $i < $total ; $i++) { 
           $data['pin_no']=   mt_rand(1000000000,9999999999);
           $data['serial_no'] =   mt_rand(1000000000,9999999999);
           $data['generated_no']  =   mt_rand(1000000000,9999999999);
           $data["created_by"] = auth()->user()->id;
		   $data["updated_by"] = auth()->user()->id;
           $result = PinDetail::create($data);
       }
       return $result;
    }
}