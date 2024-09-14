<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserCreate extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Enquiry_model');

    }
	
	
	public function index()
	{
		$data['alldata']=$this->Enquiry_model->getallEnquiry();

        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view');
		$this->load->view('hr/quotation/Quotation_detail');
		$this->load->view('common/footer_view');
	}
    
    public function create()
	{
        // $data['Refdata']=$this->Enquiry_model->getdropdown();

		$this->load->view('common/header_view');
		$this->load->view('hr/usercreate/UserCreate_view');
        // $this->load->view('Postaldispatch/Postaldispatch_view.php');
        // $this->load->view('StaffMessage/StaffMessage_view.php');
        // $this->load->view('ShareMarket/ShareMarket_view.php');
        // $this->load->view('Invoice/Invoice_view.php');
		$this->load->view('common/footer_view');
	}
	function insertEnquiry(){
        $EnquiryName= $this->input->post('EnquiryName'); 
        $EnquiryTime= $this->input->post('EnquiryTime'); 
        $Date= $this->input->post('Date'); 
        $ReferenceType= $this->input->post('ReferenceType');
        $ReferenceName= $this->input->post('ReferenceName');
        $ReferenceNo= $this->input->post('ReferenceNo'); 
        $EnquiryReason= $this->input->post('EnquiryReason'); 
        // $Mobile= $this->input->post('Mobile');
        // $Gender= $this->input->post('Gender');  
     
       $fields=array('EnquiryName'=>$EnquiryName,
                      'EnquiryTime'=>$EnquiryTime,
                      'Date'=>$Date,
                      'ReferenceType'=>$ReferenceType,
                      'ReferenceName'=>$ReferenceName,
                      'ReferenceNo'=>$ReferenceNo,
                      'EnquiryReason'=>$EnquiryReason
                    //   'Mobile'=> $Mobile,
                    //   'Gender'=>$Gender,
        //  'created_date'=>date('Y-m-d H:i:s'),
        //      'created_by'=>1
            );
            $this->Enquiry_model->insertdata($fields);
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

