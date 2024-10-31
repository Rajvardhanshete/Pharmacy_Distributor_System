<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EquipmentMaintenance extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('EquipmentMaintenance_model');

    }
	
	
	public function index()
	{
		$data['alldata']=$this->EquipmentMaintenance_model->getallEquipmentMaintenance();
        $data['equipmentdata']=$this->EquipmentMaintenance_model->equipmentDropdown();

        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view');
		$this->load->view('warehouse/equipmentmaintenance/Equipmentmaintenance_Detailsview', $data);
		$this->load->view('common/footer_view');
	}
    
    public function create()
	{
        $data['equipmentdata']=$this->EquipmentMaintenance_model->equipmentDropdown();

		$this->load->view('common/header_view');
		$this->load->view('warehouse/equipmentmaintenance/Equipmentmaintenance',$data);
        $this->load->view('common/footer_view');
	}
    public function report()
	{
        // $data['equipmentdata']=$this->EquipmentMaintenance_model->equipmentDropdown();

		// $this->load->view('common/header_view');
		$this->load->view('warehouse/equipmentmaintenance/EquipmentMaintenance_report');
        // $this->load->view('common/footer_view');
	}


    public function update($id=null)
    {
     if($id){
         $data['data']= $this->EquipmentMaintenance_model->getbyid($id);
         $data['equipmentdata']=$this->EquipmentMaintenance_model->equipmentDropdown();
         
        }
        else{
            $data['data']=null;
        }
        
       
         $this->load->view('common/header_view');
         $this->load->view('warehouse/equipmentmaintenance/Equipmentmaintenance_update',$data);
         $this->load->view('common/footer_view');
     
     }


	function insertEquipmentMaintenance(){
        $Equipment= $this->input->post('Equipment'); 
        $MaintenanceDetail= $this->input->post('MaintenanceDetail'); 
        $MaintenanceDate= $this->input->post('MaintenanceDate'); 
        $NextMaintenanceDate= $this->input->post('NextMaintenanceDate');
        $Remark= $this->input->post('Remark');
       
     
       $fields=array('Equipment'=>$Equipment,
                      'MaintenanceDetail'=>$MaintenanceDetail,
                      'MaintenanceDate'=>$MaintenanceDate,
                      'NextMaintenanceDate'=>$NextMaintenanceDate,
                      'Remark'=>$Remark
            );
            $this->EquipmentMaintenance_model->insertdata($fields);
         echo json_encode($fields);
   } 	
	

   public function updateEquipmentMaintenance()
   {
        $id = $this->input->post('id');
        $Equipment= $this->input->post('Equipment'); 
        $MaintenanceDetail= $this->input->post('MaintenanceDetail'); 
        $MaintenanceDate= $this->input->post('MaintenanceDate'); 
        $NextMaintenanceDate= $this->input->post('NextMaintenanceDate');
        $Remark= $this->input->post('Remark');
   


       $fields=array(
                      'Equipment'=>$Equipment,
                      'MaintenanceDetail'=>$MaintenanceDetail,
                      'MaintenanceDate'=>$MaintenanceDate,
                      'NextMaintenanceDate'=>$NextMaintenanceDate,
                      'Remark'=>$Remark
     
      );
$this->EquipmentMaintenance_model->updateEquipmentMaintenance($id, $fields);
redirect('WareHouse/EquipmentMaintenance/update/'.$id);
}

}
