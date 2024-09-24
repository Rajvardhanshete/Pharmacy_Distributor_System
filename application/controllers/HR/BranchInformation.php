<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branchinformation extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('visitor_model');

    }
	
    
    public function create()
	{
      

		$this->load->view('common/header_view');
		$this->load->view('hr/branchInformation/branchInformation_view');      
		$this->load->view('common/footer_view');
	} 	
	
	function insertBranchinformation()
	{
        $WarehouseName= $this->input->post('WarehouseName'); 
        $Location= $this->input->post('Location'); 
        $ContactPersonName= $this->input->post('ContactPersonName'); 
        $Contact1= $this->input->post('Contact1');
        $Contact2= $this->input->post('Contact2');
        $Email= $this->input->post('Email');  
     
       $fields=array('WarehouseName'=>$WarehouseName,
                      'Location'=>$Location,
                      'ContactPersonName'=>$ContactPersonName,
                      'Contact1'=>$Contact1,
                      'Contact2'=>$Contact2,
                      'Email'=>$Email
            );
            $this->Warehouse_model->insertdata($fields);
         echo json_encode($fields);
    //  $this->Teacher_model->insertRecord("teacherdetails",$fields);
   } 	
}
