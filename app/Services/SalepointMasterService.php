<?php

namespace App\Services; 
use App\SalepointMaster; 
use Log; 

class SalepointMasterService {

	public function store($params){ 		
		$data['name'] = $params['name'];
		$data['created_by'] = 1;
		$data['updated_by'] = 1;
		$id = $params['hidden_id'];
		if(empty($params['hidden_id'])){
			$result =  SalepointMaster::create($data);
			$id = $result->id;
		}else{ 
			SalepointMaster::where(['id' => $id])->update($data);
		}
		return $id;		

	}

}  