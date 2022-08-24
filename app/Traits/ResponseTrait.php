<?php 
namespace App\Traits;

trait ResponseTrait {

 //Common function to set result data
 public function setResultData(){

    return $result = array("result" => $this->result('', '', '', 'json'));

 }

 public function success() {
    $this->status = true;
    $this->result['status'] = true;
    $this->result['statusCode'] = 200;
 }

 public function failure() { 
    $this->status = false;
    $this->result['status'] = false;
    $this->result['statusCode'] = 400;
 }

 public function setData($key, $value) {  
    $this->result[$key] = $value;
 }

 public function result($web_view_path = '', $is_redirect = "", $params = "", $json = "") {
    
    $this->result['responseTime'] = time();
    return response()->json($this->result);
 }

}
