<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EquipmentMaster extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('EquipmentMaster_model');

    }
	
	
	public function index()
	{
		$data['alldata']=$this->EquipmentMaster_model->getallEquipments();

        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view');
		$this->load->view('warehouse/equipmentmaster/Equipmentmaster_Detailsview', $data);
		$this->load->view('common/footer_view');
	}
    
    public function create()
	{
        $data['warehousedata']=$this->EquipmentMaster_model->warehouseDropdown();

		$this->load->view('common/header_view');
		$this->load->view('warehouse/equipmentmaster/Equipmentmaster_view', $data);
        $this->load->view('common/footer_view');
	}

   

    public function update($id=null)
    {
     if($id){
         $data['data']= $this->EquipmentMaster_model->getbyid($id);
         $data['warehousedata']=$this->EquipmentMaster_model->warehouseDropdown();
         
        }
        else{
            $data['data']=null;
        }
        
       
         $this->load->view('common/header_view');
         $this->load->view('warehouse/equipmentmaster/Equipmentmaster_update',$data);
         $this->load->view('common/footer_view');
     
     }

	function insertEquipment(){
        $EquipmentName= $this->input->post('EquipmentName'); 
        $EquipmentCode= $this->input->post('EquipmentCode'); 
        $EquipmentCategory= $this->input->post('EquipmentCategory'); 
        $Description= $this->input->post('Description');
        $WareHouseName= $this->input->post('WareHouseName');
        $Maintainace= $this->input->post('Maintainace'); 
        $MaintainaceDuration= $this->input->post('MaintainaceDuration'); 
          
     
       $fields=array('EquipmentName'=>$EquipmentName,
                      'EquipmentCode'=>$EquipmentCode,
                      'EquipmentCategory'=>$EquipmentCategory,
                      'Description'=>$Description,
                      'WareHouseName'=>$WareHouseName,
                      'Maintainace'=>$Maintainace,
                      'MaintainaceDuration'=>$MaintainaceDuration

            );
            $this->EquipmentMaster_model->insertdata($fields);
         echo json_encode($fields);
    //  $this->Teacher_model->insertRecord("teacherdetails",$fields);
   } 	
   public function updateEquipments()
   {
        $id = $this->input->post('id');
        $EquipmentName= $this->input->post('EquipmentName'); 
        $EquipmentCode= $this->input->post('EquipmentCode'); 
        $EquipmentCategory= $this->input->post('EquipmentCategory'); 
        $Description= $this->input->post('Description');
        $WareHouseName= $this->input->post('WareHouseName');
        $Maintainace= $this->input->post('Maintainace'); 
        $MaintainaceDuration= $this->input->post('MaintainaceDuration'); 
          
     
       $fields=array('EquipmentName'=>$EquipmentName,
                      'EquipmentCode'=>$EquipmentCode,
                      'EquipmentCategory'=>$EquipmentCategory,
                      'Description'=>$Description,
                      'WareHouseName'=>$WareHouseName,
                      'Maintainace'=>$Maintainace,
                      'MaintainaceDuration'=>$MaintainaceDuration
      );
$this->EquipmentMaster_model->updateEquipments($id, $fields);
redirect('WareHouse/EquipmentMaster/update/'.$id);
}
	
}

