<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ItemInformation extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		// $this->load->model('visitor_model');

    }
	
    
    public function create()
	{
      

		$this->load->view('common/header_view');
		$this->load->view('inventory/itemInformation/itemInformation_view');      
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

	function insertItemInformation(){
        $ItemName= $this->input->post('ItemName'); 
        $ItemCategory= $this->input->post('ItemCategory'); 
        $BrandName= $this->input->post('BrandName'); 
        $Unit= $this->input->post('Unit');
        $MinStock= $this->input->post('MinStock');
        $MaxStock= $this->input->post('MaxStock'); 
        $PurchasePrice= $this->input->post('PurchasePrice'); 
        $SalePrice= $this->input->post('SalePrice'); 
        $Party= $this->input->post('Party'); 
        $ItemDescription= $this->input->post('ItemDescription'); 
          
     
       $fields=array('ItemName'=>$ItemName,
                      'ItemCategory'=>$ItemCategory,
                      'BrandName'=>$BrandName,
                      'Unit'=>$Unit,
                      'MinStock'=>$MinStock,
                      'MaxStock'=>$MaxStock,
                      'PurchasePrice'=>$PurchasePrice,
                      'SalePrice'=>$SalePrice,
                      'Party'=>$Party,
                      'ItemDescription'=>$ItemDescription

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
