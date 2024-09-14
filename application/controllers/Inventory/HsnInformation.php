<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HsnInformation extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		// $this->load->model('visitor_model');

    }
	
    
    public function create()
	{
      

		$this->load->view('common/header_view');
		$this->load->view('inventory/hsnInformation/hsnInformation_view');      
		$this->load->view('common/footer_view');
	} 	
	
}
