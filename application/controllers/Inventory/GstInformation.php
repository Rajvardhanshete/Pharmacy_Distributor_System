<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GstInformation extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('gstinformation_model');

    }
	
    public function index()
	{
		$data['alldata']=$this->gstinformation_model->getallGstInformation();
        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view');
        $this->load->view('inventory/gstInformation/gstInformation_detailview',$data);
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
      

		$this->load->view('common/header_view');
		$this->load->view('inventory/gstInformation/gstInformation_view');      
		$this->load->view('common/footer_view');
	} 	
	
    public function update($id=null)
    {
     if($id){
         $data['data']= $this->gstinformation_model->getbyid($id);
         
         
        }
        else{
            $data['data']=null;
        }
        // $id=$this->uri->segment(3);
        //   $data['data']=$this->Enquiry_model->getbyid($id);
        
        //   echo "<pre>";
        //   print_r($data);
        
        // $data['callTypeData']=$this->Calllog_model->calltypeDropdown();
        // $data['callReasoanData']=$this->Calllog_model->callreasoanDropdown();
       
         $this->load->view('common/header_view');
         $this->load->view('inventory/gstInformation/gstInformation_update',$data);
         $this->load->view('common/footer_view');

     }
	
     function insertGstInformation(){
        $GSTName= $this->input->post('GSTName'); 
        $GSTShortName= $this->input->post('GSTShortName'); 
        $GSTPercentage= $this->input->post('GSTPercentage'); 
        $IGSTValue= $this->input->post('IGSTValue');
        $CGSTValue= $this->input->post('CGSTValue');
        $SGSTValue= $this->input->post('SGSTValue');
        $Description= $this->input->post('Description');
        // $ReferenceType= $this->input->post('ReferenceType');
        // $ReferenceName= $this->input->post('ReferenceName'); 
        // $DOB= $this->input->post('DOB'); 
        // $Gender= $this->input->post('Gender');
     
       $fields=array('GSTName'=>$GSTName,
                      'GSTShortName'=>$GSTShortName,
                      'GSTPercentage'=>$GSTPercentage,
                      'IGSTValue'=>$IGSTValue,
                      'CGSTValue'=>$CGSTValue,
                      'SGSTValue'=>$SGSTValue,
                      'Description'=>$Description,
                    //   'ReferenceType'=>$ReferenceType,
                    //   'ReferenceName'=>$ReferenceName,F
                    //   'DOB'=>$DOB,
                    //   'Gender'=> $Gender,
        //  'created_date'=>date('Y-m-d H:i:s'),
        //      'created_by'=>1
            );
            $this->gstinformation_model->insertdata($fields);
         echo json_encode($fields);
    //  $this->Teacher_model->insertRecord("teacherdetails",$fields);
   }

	function updateGstInformation(){
        $id = $this->input->post('id');
        $GSTName= $this->input->post('GSTName'); 
        $GSTShortName= $this->input->post('GSTShortName'); 
        $GSTPercentage= $this->input->post('GSTPercentage'); 
        $IGSTValue= $this->input->post('IGSTValue');
        $CGSTValue= $this->input->post('CGSTValue');
        $SGSTValue= $this->input->post('SGSTValue');
        $Description= $this->input->post('Description');
        // $ReferenceType= $this->input->post('ReferenceType');
        // $ReferenceName= $this->input->post('ReferenceName'); 
        // $DOB= $this->input->post('DOB'); 
        // $Gender= $this->input->post('Gender');
     
       $fields=array('GSTName'=>$GSTName,
                      'GSTShortName'=>$GSTShortName,
                      'GSTPercentage'=>$GSTPercentage,
                      'IGSTValue'=>$IGSTValue,
                      'CGSTValue'=>$CGSTValue,
                      'SGSTValue'=>$SGSTValue,
                      'Description'=>$Description,
                    //   'ReferenceType'=>$ReferenceType,
                    //   'ReferenceName'=>$ReferenceName,
                    //   'DOB'=>$DOB,
                    //   'Gender'=> $Gender,
        //  'created_date'=>date('Y-m-d H:i:s'),
        //      'created_by'=>1
            );
         $this->gstinformation_model->updateGstInformation($id, $fields);
redirect('Inventory/GstInformation/update/'.$id);

    }

}