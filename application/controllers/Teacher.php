<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Teacher_model');

    }
	
	
	public function index()
	{
		$data['alldata']=$this->Teacher_model->getallteachers();

        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view');
		$this->load->view('teacher/TeacherDetailsview',$data);
		$this->load->view('common/footer_view');
	

	}
    public function create()
    {
        $data['Refdata']=$this->Teacher_model->getdropdown();
        $data['deodata']=$this->Teacher_model->getdropdown1();
		$this->load->view('common/header_view');
		$this->load->view('teacher/Teacher_view',$data);
        $this->load->view('common/footer_view');
	}


	function insertTeacher(){
        $FullName= $this->input->post('FullName'); 
        $Address= $this->input->post('Address'); 
        $JoinDate= $this->input->post('JoinDate'); 
        $EndDate= $this->input->post('EndDate');
        $Qualification= $this->input->post('Qualification');
        $Experience= $this->input->post('Experience'); 
        $DateOB= $this->input->post('DateOB'); 
        $Mobile= $this->input->post('Mobile');
        $Gender= $this->input->post('Gender');  
     
       $fields=array('FullName'=>$FullName,
                      'Address'=>$Address,
                      'JoinDate'=>$JoinDate,
                      'EndDate'=>$EndDate,
                      'Qualification'=>$Qualification,
                      'Experience'=>$Experience,
                      'DateOB'=>$DateOB,
                      'Mobile'=> $Mobile,
                      'Gender'=>$Gender
        //  'created_date'=>date('Y-m-d H:i:s'),
        //      'created_by'=>1
            );
            $this->Teacher_model->insertdata($fields);
         echo json_encode($fields);
    //  $this->Teacher_model->insertRecord("teacherdetails",$fields);
   } 	
	
}

