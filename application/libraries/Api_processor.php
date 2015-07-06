<?php

class Api_processor{

  private $oCI = null;

  public function __construct(){
    $this->oCI =& get_instance();
    if($this->oCI->uri->segment(1) === 'api'){
      if($this->oCI->uri->segment(2) != '' &&
         $this->oCI->uri->segment(3) != ''){
            header('Content-Type: application/json; charset=latin-9');
      }else{
        redirect();
      }
    }
  }
  
  public function serve($sData = ""){
     
     $aJson = array();
     if($sData != ""){
     
       $this->oCI->db->select('*')
                      ->from($sData);
       $oRes = $this->oCI->db->get();
       $aRes = $oRes->result_array();
       
       if(!empty($aRes)){
         foreach($aRes as $iKey => $aData){
            $aJson[$iKey] = $aData;   
         }     
       }
    }

    echo json_encode($aJson);  
  }
  
  
  private function utf8rek($aArr){
    foreach($aArr as &$mItem){
      if(is_array($mItem)){
        $this->utf8rek($mItem);  
      }else{
        $mItem = ($mItem);
      }
    }
    return $aArr; 
  }

}

?>