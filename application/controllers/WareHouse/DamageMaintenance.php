<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DamageMaintenance extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('DamageMaintenance_model');

    }
	
	
	public function index()
	{
		$data['alldata']=$this->DamageMaintenance_model->getallEquipmentMaintenance();

        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view');
		$this->load->view('warehouse/damage/Damagemaintenance_Detailsview', $data);
		$this->load->view('common/footer_view');
	}
    
    public function create()
	{
        // $data['equipmentdata']=$this->DamageMaintenance_model->equipmentDropdown();

		$this->load->view('common/header_view');
		$this->load->view('warehouse/damage/Damage_reporting');
        $this->load->view('common/footer_view');
	}


    public function update($id=null)
    {
     if($id){
         $data['data']= $this->DamageMaintenance_model->getbyid($id);
         $data['equipmentdata']=$this->DamageMaintenance_model->equipmentDropdown();
         
        }
        else{
            $data['data']=null;
        }
        
       
         $this->load->view('common/header_view');
         $this->load->view('warehouse/damage/Damage_reporting',$data);
         $this->load->view('common/footer_view');
     
     }


	function insertDamageMaintenance(){
        $DamageName= $this->input->post('DamageName'); 
        $DamageQuantity= $this->input->post('DamageQuantity'); 
        $Person= $this->input->post('Person'); 
        $Reason= $this->input->post('Reason');       
     
       $fields=array('DamageName'=>$DamageName,
                      'DamageQuantity'=>$DamageQuantity,
                      'Person'=>$Person,
                      'Reason'=>$Reason
            );
            $this->DamageMaintenance_model->insertdata($fields);
         echo json_encode($fields);
   } 	
	

   public function updateDamageNameMaintenance()
   {
        $id = $this->input->post('id');
        $DamageName= $this->input->post('DamageName'); 
        $DamageQuantity= $this->input->post('DamageQuantity'); 
        $Person= $this->input->post('Person'); 
        $Reason= $this->input->post('Reason');
    
   


       $fields=array(
                      'DamageName'=>$DamageName,
                      'DamageQuantity'=>$DamageQuantity,
                      'Person'=>$Person,
                      'Reason'=>$Reason
     
      );
$this->DamageMaintenance_model->updateDamageNameMaintenance($id, $fields);
redirect('WareHouse/EquipmentMaintenance/update/'.$id);
}

}
