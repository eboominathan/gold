<?php

namespace App\Services; 
use App\SalepointMaster; 
use Log; 

class SalepointMasterService {

	public function store($params){ 		
		$data['name'] = $params['name'];
		$data['created_by'] = 1;
		$data['updated_by'] = 1;
		$id = $params['id'];
		if(empty($params['id'])){
			$result =  SalepointMaster::create($data);
			$id = $result->id;
		}else{ 
			SalepointMaster::where(['id' => $id])->update($data);
		}
		return $id;		

	}


	public function getSalepointMasterById($id){
		return SalepointMaster::find($id);
	}
		public function deleteSalepointMasterById($id){
		return SalepointMaster::find($id)->delete();
	}

}  