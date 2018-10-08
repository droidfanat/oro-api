<?php
namespace oroapi;


class OroRequest extends client\Request{

    
    public function __construct($url ,$u_name, $apikey) {
        parent::__construct($url ,$u_name, $apikey);
    }
    
    public function post($path,$data) {
       $resp=$this->curl_req($path, 'POST', \GuzzleHttp\json_encode(['data'=>$data]));
       return $resp;
    }
    
    
    
    public function put($path,$data){
        
    }
    
    public function get($id) {
        
    }
    
    public function getAll() {
        
    }
    
    
    
    
    
    
}
