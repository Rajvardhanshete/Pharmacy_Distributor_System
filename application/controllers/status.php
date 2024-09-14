<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class status extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('status_model');

    }
	
	
	public function index()
	{
		$data['alldata']=$this->status_model->getdetailview();
        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view');
        $this->load->view('status/statusDetailsview', $data);
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
		$this->load->view('common/header_view');
		$this->load->view('status/status_view');
		$this->load->view('common/footer_view');
	}

	function insertSTAFF(){
        $BranchName= $this->input->post('BranchName'); 
        $EmployeeName= $this->input->post('EmployeeName'); 
        $Message= $this->input->post('Message'); 
        $Date= $this->input->post('Date');
        $ReferenceType= $this->input->post('ReferenceType');
        $ReferenceName= $this->input->post('ReferenceName'); 
        // $DOB= $this->input->post('DOB'); 
        // $Gender= $this->input->post('Gender');
     
       $fields=array('BranchName'=>$BranchName,
                      'EmployeeName'=>$EmployeeName,
                      'Message'=>$Message,
                      'Date'=>$Date,
                      'ReferenceType'=>$ReferenceType,
                      'ReferenceName'=>$ReferenceName,
                    //   'DOB'=>$DOB,
                    //   'Gender'=> $Gender,
        //  'created_date'=>date('Y-m-d H:i:s'),
        //      'created_by'=>1
            );
            $this->status_model->insertdata($fields);
         echo json_encode($fields);
    //  $this->Teacher_model->insertRecord("teacherdetails",$fields);
   } 

    
}