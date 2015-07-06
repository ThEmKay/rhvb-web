<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class medical extends CI_Controller {

	public function doctors()
	{
	   $this->api_processor->serve('doctors');
	}
}

?>