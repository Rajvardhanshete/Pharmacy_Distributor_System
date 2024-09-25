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
        $BranchName= $this->input->post('BranchName'); 
        $PartyName= $this->input->post('PartyName'); 
        $GSTNumber= $this->input->post('GSTNumber'); 
        $PANNumber= $this->input->post('PANNumber');
        $StartTime= $this->input->post('StartTime');
        $EndTime= $this->input->post('EndTime');  
        $HACDisplayName= $this->input->post('HACDisplayName');  
        $ContactNo= $this->input->post('ContactNo');  
        $Email= $this->input->post('Email');  
        $PurchaseEmail= $this->input->post('PurchaseEmail');  
        $SalesEmail= $this->input->post('SalesEmail');  
        $Website= $this->input->post('Website');  
        $FacebookLink= $this->input->post('FacebookLink');  
        $GooglePlus= $this->input->post('GooglePlus');  
        $TwitterLink= $this->input->post('TwitterLink');  
        $LinkedinLink= $this->input->post('LinkedinLink');  
        $InstagramLink= $this->input->post('InstagramLink');  
     
       $fields=array('BranchName'=>$BranchName,
                      'PartyName'=>$PartyName,
                      'GSTNumber'=>$GSTNumber,
                      'PANNumber'=>$PANNumber,
                      'StartTime'=>$StartTime,
                      'EndTime'=>$EndTime,
                      'HACDisplayName'=>$HACDisplayName,
                      'ContactNo'=>$ContactNo,
                      'Email'=>$Email,
                      'PurchaseEmail'=>$PurchaseEmail,
                      'SalesEmail'=>$SalesEmail,
                      'Website'=>$Website,
                      'FacebookLink'=>$FacebookLink,
                      'GooglePlus'=>$GooglePlus,
                      'TwitterLink'=>$TwitterLink,
                      'LinkedinLink'=>$LinkedinLink,
                      'InstagramLink'=>$InstagramLink,
            );
            $this->Warehouse_model->insertdataBranchinformation($fields);
         echo json_encode($fields);
    //  $this->Teacher_model->insertRecord("teacherdetails",$fields);
   } 	
}
