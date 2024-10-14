<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Login_model');

    }
	
	
	public function index()
	{
		// $data['alldata']=$this->bank_model->getdetailview();
        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view');
        $this->load->view('login');
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
		$this->load->view('common/header_view');
		$this->load->view('hr/bank/bank_view');
		$this->load->view('common/footer_view');
	}

	function logincheck(){
        $UserName= $this->input->post('UserName'); 
        $password= $this->input->post('password'); 
       
     
       $fields=array('UserName'=>$UserName,
                      'password'=>$password,
            );
            $this->Login_model->getbyUserName($fields);
         echo json_encode($fields);
    //  $this->Teacher_model->insertRecord("teacherdetails",$fields);
   } 

    
}