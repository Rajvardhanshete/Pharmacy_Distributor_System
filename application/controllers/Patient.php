<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Patient_model');

    }
	
	
	public function index()
	{

    	  $data['alldata']=$this->Patient_model->getallPatient();

        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view');
        $this->load->view('Patient/patientDetailsview',$data);
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
        $this->load->helper('form');
		$this->load->view('common/header_view');
		$this->load->view('Patient/Patient_view');
		$this->load->view('common/footer_view');
	

	}

	function insertPATIENT(){
        $PatientName= $this->input->post('PatientName'); 
        $Date= $this->input->post('Date'); 
        
        $Remark= $this->input->post('Remark'); 
        $FrameUses= $this->input->post('FrameUses'); 
        $Type= $this->input->post('Type'); 
        $Unit= $this->input->post('Unit'); 
        $GlassType= $this->input->post('GlassType'); 
        $BIllAmount= $this->input->post('BIllAmount'); 
        $firstPaymentMode= $this->input->post('firstPaymentMode'); 
        $firstAmount= $this->input->post('firstAmount'); 
        $secondPaymentMode= $this->input->post('secondPaymentMode');
        $secondAmount= $this->input->post('secondAmount');
        $thirdPaymentMode= $this->input->post('thirdPaymentMode'); 
        $thirdAmount= $this->input->post('thirdAmount'); 
        $forthPaymentMode= $this->input->post('forthPaymentMode');
        $forthAmount= $this->input->post('forthAmount');
        $remainingAmount= $this->input->post('remainingAmount');
        $TotalPaidAmount= $this->input->post('TotalPaidAmount');
        $Note= $this->input->post('Note');
     
       $fields=array(
		              'PatientName'=>$PatientName,
		              'Date'=>$Date,
		             
		              'Remark'=>$Remark,
		              'FrameUses'=>$FrameUses,
		              'Type'=>$Type,
		              'Unit'=>$Unit,
		              'GlassType'=>$GlassType,
		              'BIllAmount'=>$BIllAmount,
                      'firstPaymentMode'=>$firstPaymentMode,
                      'firstAmount'=>$firstAmount,
                      'secondPaymentMode'=>$secondPaymentMode,
                      'secondAmount'=>$secondAmount,
                      'thirdPaymentMode'=>$thirdPaymentMode,
                      'thirdAmount'=>$thirdAmount,
                      'forthPaymentMode'=> $forthPaymentMode,
                      'forthAmount'=> $forthAmount,
                      'remainingAmount'=> $remainingAmount,
                      'TotalPaidAmount'=> $TotalPaidAmount,
                      'Note'=> $Note,
        //  'created_date'=>date('Y-m-d H:i:s'),
        //      'created_by'=>1
            );
            $this->Patient_model->insertdata($fields);
         echo json_encode($fields);
    //  $this->Teacher_model->insertRecord("teacherdetails",$fields);
   } 

    
    
}