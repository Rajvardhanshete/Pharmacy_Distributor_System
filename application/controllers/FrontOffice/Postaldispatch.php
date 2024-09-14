<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postaldispatch extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Postaldispatch_model');

    }
	
	
	public function index()
	{

    	  $data['alldata']=$this->Postaldispatch_model->getallPostaldispatch();

        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view');
        $this->load->view('frontoffice/Postaldispatch/postaldispatchDetailview',$data);
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
        $data['deodata']=$this->Postaldispatch_model->getdropdown();
        $this->load->helper('form');
		$this->load->view('common/header_view');
		$this->load->view('frontoffice/Postaldispatch/Postaldispatch_view',$data);
		$this->load->view('common/footer_view');
	

	}

	function insertPOSTALDISPATCH(){
        $OutwordNo= $this->input->post('OutwordNo'); 
        $OutwordLetterNo= $this->input->post('OutwordLetterNo'); 
        $OutwordDate= $this->input->post('OutwordDate'); 
        $Name= $this->input->post('Name');
        $Place= $this->input->post('Place');
        $Address= $this->input->post('Address'); 
        $IncomingNumber= $this->input->post('IncomingNumber'); 
        $IncomingDate= $this->input->post('IncomingDate');
        $subject= $this->input->post('subject');
        $Remark= $this->input->post('Remark');
        $PostalCharges= $this->input->post('PostalCharges');
     
       $fields=array('OutwordNo'=>$OutwordNo,
                      'OutwordLetterNo'=>$OutwordLetterNo,
                      'OutwordDate'=>$OutwordDate,
                      'Name'=>$Name,
                      'Place'=>$Place,
                      'Address'=>$Address,
                      'IncomingNumber'=>$IncomingNumber,
                      'IncomingDate'=> $IncomingDate,
                      'subject'=> $subject,
                      'Remark'=> $Remark,
                      'PostalCharges'=> $PostalCharges,
        //  'created_date'=>date('Y-m-d H:i:s'),
        //      'created_by'=>1
            );
            $this->Postaldispatch_model->insertdata($fields);
         echo json_encode($fields);
    //  $this->Teacher_model->insertRecord("teacherdetails",$fields);
   } 


    
    
}