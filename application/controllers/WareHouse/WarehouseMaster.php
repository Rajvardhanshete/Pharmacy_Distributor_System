<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WarehouseMaster extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Warehouse_model');

    }
	
	
	public function index()
	{
		$data['alldata']=$this->Warehouse_model->getdetailview();

        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view');
		$this->load->view('warehouse/warehouse/warehouse_Detailsview', $data);
		$this->load->view('common/footer_view');
	}
    
    public function create()
	{
		$this->load->view('common/header_view');
		$this->load->view('warehouse/warehouse/Warehousemaster_view');
        $this->load->view('common/footer_view');
	}
    public function update($id=null)
    {
     if($id){
         $data['data']= $this->Warehouse_model->getbyid($id);
         
        }
        else{
            $data['data']=null;
        }
        
       
         $this->load->view('common/header_view');
         $this->load->view('warehouse/warehouse/Warehousemaster_update',$data);
         $this->load->view('common/footer_view');
     
     }
	function insertWarehouse(){
        $WarehouseName= $this->input->post('WarehouseName'); 
        $Location= $this->input->post('Location'); 
        $ContactPersonName= $this->input->post('ContactPersonName'); 
        $Contact1= $this->input->post('Contact1');
        $Contact2= $this->input->post('Contact2');
        $Email= $this->input->post('Email');  
     
       $fields=array('WarehouseName'=>$WarehouseName,
                      'Location'=>$Location,
                      'ContactPersonName'=>$ContactPersonName,
                      'Contact1'=>$Contact1,
                      'Contact2'=>$Contact2,
                      'Email'=>$Email
            );
            $this->Warehouse_model->insertdata($fields);
         echo json_encode($fields);
    //  $this->Teacher_model->insertRecord("teacherdetails",$fields);
   } 	

   public function updateWarehouse()
   {
        $id = $this->input->post('id');
        $WarehouseName= $this->input->post('WarehouseName'); 
        $Location= $this->input->post('Location'); 
        $ContactPersonName= $this->input->post('ContactPersonName'); 
        $Contact1= $this->input->post('Contact1');
        $Contact2= $this->input->post('Contact2');
        $Email= $this->input->post('Email');  
     
       $fields=array('WarehouseName'=>$WarehouseName,
                      'Location'=>$Location,
                      'ContactPersonName'=>$ContactPersonName,
                      'Contact1'=>$Contact1,
                      'Contact2'=>$Contact2,
                      'Email'=>$Email
            );
$this->Warehouse_model->updateWarehouse($id, $fields);
redirect('WareHouse/WarehouseMaster/update/'.$id);
}
	
}

?>
