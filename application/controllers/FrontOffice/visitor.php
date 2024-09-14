<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class visitor extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('visitor_model');

    }
	
	
	public function index()
	{
		$data['alldata']=$this->visitor_model->getallVisit();

        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view');
		$this->load->view('frontoffice/visitorbook/visitorDetailsview', $data);
		$this->load->view('common/footer_view');
	}
    
    public function create()
	{
      

		$this->load->view('common/header_view');
		$this->load->view('frontoffice/visitorbook/visitor_view');      
		$this->load->view('common/footer_view');
	}
	function insertVisit(){
        $VisitorName= $this->input->post('VisitorName'); 
        $date= $this->input->post('date'); 
        // $Date= $this->input->post('Date'); 
        $TimeIn= $this->input->post('TimeIn');
        $TimeOut= $this->input->post('TimeOut');
        $Address= $this->input->post('Address'); 
        $Reasone= $this->input->post('Reasone'); 
        // $Mobile= $this->input->post('Mobile');
        // $Gender= $this->input->post('Gender');  
     
       $fields=array('VisitorName'=>$VisitorName,
                      'date'=>$date,
                    //   'Date'=>$Date,
                      'TimeIn'=>$TimeIn,
                      'TimeOut'=>$TimeOut,
                      'Address'=>$Address,
                      'Reasone'=>$Reasone
                    //   'Mobile'=> $Mobile,
                    //   'Gender'=>$Gender,
        //  'created_date'=>date('Y-m-d H:i:s'),
        //      'created_by'=>1
            );
            $this->visitor_model->insertdata($fields);
         echo json_encode($fields);
    //  $this->Teacher_model->insertRecord("teacherdetails",$fields);
   } 	
	
}

    // public function staff()
	// {
	// 	$this->load->view('common/header_view');
    //     $this->load->view('StaffMessage/StaffMessage_view.php');
	// 	$this->load->view('common/footer_view');
	// }
    // public function invoice()
	// {
	// 	$this->load->view('common/header_view');
    //     $this->load->view('Invoice/Invoice_view.php');
	// 	$this->load->view('common/footer_view');
	// }
	
    
  
	
	
// }

