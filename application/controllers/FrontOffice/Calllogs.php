<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calllogs extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Calllog_model');
    }
	
	
	public function index()
	{
		$data['alldata']=$this->Calllog_model->getallCalllogs();
        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view');
        $this->load->view('frontoffice/calllog/calllogDetailsview',$data);
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
		$data['callTypeData']=$this->Calllog_model->calltypeDropdown();
        $data['callReasoanData']=$this->Calllog_model->callreasoanDropdown();
		$this->load->view('common/header_view');
		$this->load->view('frontoffice/calllog/calllog_view',$data);
		$this->load->view('common/footer_view');
	}

    public function update($id=null)
    {
     if($id){
         $data['data']= $this->Calllog_model->getbyid($id);
         $data['callTypeData']=$this->Calllog_model->calltypeDropdown();
         $data['callReasoanData']=$this->Calllog_model->callreasoanDropdown();
         
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
         $this->load->view('frontoffice/calllog/calllog_update',$data);
         $this->load->view('common/footer_view');
     
     }


	function insertCalllog(){
        $CallType= $this->input->post('CallType'); 
        $Callpname= $this->input->post('Callpname'); 
        $EmpName= $this->input->post('EmpName'); 
        $Calldate= $this->input->post('Calldate');
        $CallResType= $this->input->post('CallResType');
        $CallTime= $this->input->post('CallTime'); 
        $NextFollowDate= $this->input->post('NextFollowDate'); 
        $CallDescription= $this->input->post('CallDescription'); 
        $Feedback= $this->input->post('Feedback'); 
     
       $fields=array('CallType'=>$CallType,
                      'Callpname'=>$Callpname,
                      'EmpName'=>$EmpName,
                      'Calldate'=>$Calldate,
                      'CallReasoanType'=>$CallResType,
                      'CallTime'=>$CallTime,
                      'NextFollowDate'=>$NextFollowDate,
                      'CallDescription'=>$CallDescription,
                      'Feedback'=>$Feedback
            );
            $this->Calllog_model->insertdata($fields);
         echo json_encode($fields);
   } 	

   public function updateCalllog()
   {
        $id = $this->input->post('id');
        $CallType= $this->input->post('CallType'); 
        $Callpname= $this->input->post('Callpname'); 
        $EmpName= $this->input->post('EmpName'); 
        $Calldate= $this->input->post('Calldate');
        $CallResType= $this->input->post('CallResType');
        $CallTime= $this->input->post('CallTime'); 
        $NextFollowDate= $this->input->post('NextFollowDate'); 
        $CallDescription= $this->input->post('CallDescription'); 
        $Feedback= $this->input->post('Feedback'); 
   


       $fields=array(
                      'CallType'=>$CallType,
                      'Callpname'=>$Callpname,
                      'EmpName'=>$EmpName,
                      'Calldate'=>$Calldate,
                      'CallReasoanType'=>$CallResType,
                      'CallTime'=>$CallTime,
                      'NextFollowDate'=>$NextFollowDate,
                      'CallDescription'=>$CallDescription,
                      'Feedback'=>$Feedback
     
      );
$this->Calllog_model->updateCalllog($id, $fields);
redirect('FrontOffice/Calllogs/update/'.$id);
}




}