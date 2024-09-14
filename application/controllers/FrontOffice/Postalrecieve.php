<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postalrecieve extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
		$this->load->model('Postalrecieve_Model');
    }
	
	
	public function index()
	{


		$data['alldata']=$this->Postalrecieve_Model->getallpostalrecieve();
        
        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view');
        $this->load->view('frontoffice/postalrecieve/PostalrecieveDetailview',$data);
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
        $data['deodata']=$this->Postalrecieve_Model->getdropdown();
		$this->load->view('common/header_view');
		$this->load->view('frontoffice/postalrecieve/Postalrecieve_view',$data);
		$this->load->view('common/footer_view');
	

	}


	function insertPostalrecieve(){
        $InwordNo= $this->input->post('InwordNo'); 
        $InwordDate= $this->input->post('InwordDate'); 
        $Name= $this->input->post('Name');
        $Place= $this->input->post('Place');
        $Address= $this->input->post('Address');
        $InNoReference= $this->input->post('InNoReference');
        $InDateReference= $this->input->post('InDateReference');
        $SubjectOfCorres= $this->input->post('SubjectOfCorres');
        $Remark= $this->input->post('Remark');
        $PostalCharges= $this->input->post('PostalCharges');
        // $Gender= $this->input->post('Gender');  
       
      
     
       $fields=array('InwordNo'=>$InwordNo,
                      'InwordDate'=>$InwordDate,
                      'Name'=>$Name,
                      'Place'=>$Place,
                      'Address'=>$Address,
                      'InNoReference'=>$InNoReference,
                      'InDateReference'=>$InDateReference,
                      'SubjectOfCorres'=>$SubjectOfCorres,
                      'Remark'=>$Remark,
                      'PostalCharges'=>$PostalCharges,
                    //   'Gender'=>$Gender


                     
                      
        //  'created_date'=>date('Y-m-d H:i:s'),
        //      'created_by'=>1
            );
            $this->Postalrecieve_Model->insertdata($fields);
         echo json_encode($fields);
    //  $this->Teacher_model->insertRecord("teacherdetails",$fields);
   }

}