<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class empinfo extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('empinfo_model');

    }
	
	
	public function index()
	{
		$data['alldata']=$this->empinfo_model->getallpersonalinfo();

        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view');
		$this->load->view('hr/empinfo/empinfoDetailsview.php', $data);
		$this->load->view('common/footer_view');
	}
    
    public function create()
	{
      

		$this->load->view('common/header_view');
		$this->load->view('hr/empinfo/empinfo_view');
        $this->load->view('common/footer_view');
	}
// 	function insertPass(){
//         $PersonName= $this->input->post('PersonName'); 
//         $GateInDate= $this->input->post('GateInDate'); 
//         $GateInTime= $this->input->post('GateInTime'); 
//         $Reason= $this->input->post('Reason');
//         $DriverName= $this->input->post('DriverName');
//         $Mobile= $this->input->post('Mobile'); 
//         $VehicleName= $this->input->post('VehicleName'); 
//         $VehicleNo= $this->input->post('VehicleNo');
//         $GateOutDate= $this->input->post('GateOutDate');  
//         $GateOutTime= $this->input->post('GateOutTime');  
//         $FrontPhoto= $this->input->post('FrontPhoto');  
//         $BackPhoto= $this->input->post('BackPhoto');  
     
//        $fields=array('PersonName'=>$PersonName,
//                       'GateInDate'=>$GateInDate,
//                       'GateInTime'=>$GateInTime,
//                       'Reason'=>$Reason,
//                       'DriverName'=>$DriverName,
//                       'Mobile'=>$Mobile,
//                       'VehicleName'=>$VehicleName,
//                       'VehicleNo'=> $VehicleNo,
//                       'GateOutDate'=>$GateOutDate,
//                       'GateOutTime'=>$GateOutTime,
//                       'FrontPhoto'=>$FrontPhoto,
//                       'BackPhoto'=>$BackPhoto,
//         //  'created_date'=>date('Y-m-d H:i:s'),
//         //      'created_by'=>1
//             );
//             $this->personalinfo_model->insertdata($fields);
//          echo json_encode($fields);
//     //  $this->Teacher_model->insertRecord("teacherdetails",$fields);
//    } 	
	
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

