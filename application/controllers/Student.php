<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Student_model');

    }
	
	
	public function index()
	{
		$data['alldata']=$this->Student_model->getdetailview();
        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view');
        $this->load->view('student/studentDetailsview', $data);
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
        $data['Refdata']=$this->Student_model->getdropdown();
        $data['deodata']=$this->Student_model->getdropdown1();
		$this->load->view('common/header_view');
		$this->load->view('student/student_view',$data);
        $this->load->view('common/footer_view');
	}
  
	function insertSTUDENT(){
        $FullName= $this->input->post('FullName'); 
        $Address= $this->input->post('Address'); 
        $Mobile= $this->input->post('Mobile'); 
        $Email= $this->input->post('Email');
        $Std= $this->input->post('Std');
        $Subject= $this->input->post('Subject'); 
        $DOB= $this->input->post('DOB'); 
        $Gender= $this->input->post('Gender');
     
       $fields=array('FullName'=>$FullName,
                      'Address'=>$Address,
                      'Mobile'=>$Mobile,
                      'Email'=>$Email,
                      'Std'=>$Std,
                      'Subject'=>$Subject,
                      'DOB'=>$DOB,
                      'Gender'=> $Gender,
        //  'created_date'=>date('Y-m-d H:i:s'),
        //      'created_by'=>1
            );
            $this->Student_model->insertdata($fields);
         echo json_encode($fields);
    //  $this->Teacher_model->insertRecord("teacherdetails",$fields);
   } 

    
}