<?php

class api_controller extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->prepareOutput();
  }
  
  private function prepareOutput(){
    $this->output->set_content_type('application/json');
  }
  
}

?>