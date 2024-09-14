<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Complain extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('complain_model');

    }
	
	
	public function index()
	{
		$data['alldata']=$this->complain_model->getdetailview();
        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view');
        $this->load->view('frontoffice/complain/complainDetailsview', $data);
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
		$this->load->view('common/header_view');
		$this->load->view('frontoffice/complain/complain_view');
		$this->load->view('common/footer_view');
	}

    public function update($id=null)
    {
     if($id){
         $data['data']= $this->complain_model->getbyid($id);
         
        }
        else{
            $data['data']=null;
        }
        // $id=$this->uri->segment(3);
        //   $data['data']=$this->Enquiry_model->getbyid($id);
        
        //   echo "<pre>";
        //   print_r($data);
        
        // $data['callTypeData']=$this->complain_model->calltypeDropdown();
        // $data['callReasoanData']=$this->complain_model->callreasoanDropdown();
       
         $this->load->view('common/header_view');
         $this->load->view('frontoffice/complain/complain_update',$data);
         $this->load->view('common/footer_view');
     
     }


	function insertCOMPLAIN(){
        $ComplainName= $this->input->post('ComplainName'); 
        $Mobile= $this->input->post('Mobile'); 
        $Date= $this->input->post('Date'); 
        $Description= $this->input->post('Description');
        // $ReferenceType= $this->input->post('ReferenceType');
        // $ReferenceName= $this->input->post('ReferenceName'); 
        // $DOB= $this->input->post('DOB'); 
        // $Gender= $this->input->post('Gender');
     
       $fields=array('ComplainName'=>$ComplainName,
                      'Mobile'=>$Mobile,
                      'Date'=>$Date,
                      'Description'=>$Description,
                    //   'ReferenceType'=>$ReferenceType,
                    //   'ReferenceName'=>$ReferenceName,
                    //   'DOB'=>$DOB,
                    //   'Gender'=> $Gender,
        //  'created_date'=>date('Y-m-d H:i:s'),
        //      'created_by'=>1
            );
            $this->complain_model->insertdata($fields);
         echo json_encode($fields);
    //  $this->Teacher_model->insertRecord("teacherdetails",$fields);
   }

	function updateComplain(){
        $id = $this->input->post('id');
        $ComplainName= $this->input->post('ComplainName'); 
        $Mobile= $this->input->post('Mobile'); 
        $Date= $this->input->post('Date'); 
        $Description= $this->input->post('Description');
        // $ReferenceType= $this->input->post('ReferenceType');
        // $ReferenceName= $this->input->post('ReferenceName'); 
        // $DOB= $this->input->post('DOB'); 
        // $Gender= $this->input->post('Gender');
     
       $fields=array('ComplainName'=>$ComplainName,
                      'Mobile'=>$Mobile,
                      'Date'=>$Date,
                      'Description'=>$Description,
                    //   'ReferenceType'=>$ReferenceType,
                    //   'ReferenceName'=>$ReferenceName,
                    //   'DOB'=>$DOB,
                    //   'Gender'=> $Gender,
        //  'created_date'=>date('Y-m-d H:i:s'),
        //      'created_by'=>1
            );
         $this->complain_model->updateComplain($id, $fields);
redirect('FrontOffice/complain/update/'.$id);
   } 

    
}