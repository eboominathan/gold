<?php

namespace App\Services; 
use Illuminate\Support\Facades\Hash;
use App\SalepointMember; 
use App\User; 
use Log; 
use Carbon\Carbon;

class ApplicationService {

	public function store($params){

		$userData = [
			"user_id" =>$params['user_id'],
			"email" =>$params['email'],
			"password" => Hash::make($params['password']),
			"hidden" =>$params['password'],
			"type" => 'salepoint',				 
			"created_by" => auth()->user()->id,
			"updted_by" => auth()->user()->id
		];
		$result = User::create($userData);
		$userId = $result->id;
		$date ='0000-00-00';
		$dob ='0000-00-00';		
		if(!empty($params['date'])){
			$date = Carbon::createFromFormat('d-m-Y', $params['date'])->format('Y-m-d');
			}
			if(!empty($params['dob'])){
			$dob = Carbon::createFromFormat('d-m-Y', $params['dob'])->format('Y-m-d');
			}

		$data = [ 		
			"name" =>$params['name'],
			"date" =>$date,
			"dob" => $dob,
			"age" =>$params['age'],
			"gender" =>$params['gender'],
			"address" =>$params['address'],
			"pincode" =>$params['pincode'],
			"city" =>$params['city'],
			"state" =>$params['state'],
			"mobile" =>$params['mobile'],			
			"aadhaar_no" =>$params['aadhaar_no'],
			"acc_holder_name" =>$params['acc_holder_name'],
			"acc_no" =>$params['acc_no'],
			"ifsc_code" =>$params['ifsc_code'],
			"branch_name" =>$params['branch_name'],
			"bank_name" =>$params['bank_name'],
			"s_no" =>$params['s_no'],
			"pin_no" =>$params['pin_no'],
			"sponsor_id" =>$params['sponsor_id'],
			"nominee_name" =>$params['nominee_name'],
			"nominee_reltnshp" =>$params['nominee_reltnshp'],
			"user_id" =>$userId,
			'created_by' =>  auth()->user()->id,
			'updated_by' =>  auth()->user()->id
		];
		return SalepointMember::create($data);
		 
	}


	public function getUserId(){
		$user =  User::where('type','!=','superadmin')->orderBy('id','desc')->first();
		if(empty($user)){
			$userId = config('constants.DEFAULT_USER_ID');
		}else{
			$userId = $user->user_id;
			$userId++; 
		}
		return	$userId;
	}
	public function deleteSalepointMasterById($id){
		return SalepointMaster::find($id)->delete();
	}

}  