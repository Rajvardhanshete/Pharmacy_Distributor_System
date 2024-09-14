<?php
  class EquipmentMaster_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      public function insertdata($model)
	{
		return $this->db->insert('equipments',$model);
			//return $sql->result();
	} 

    public function getallEquipments()
  {
    $this->db->select('equipments.id, equipments.EquipmentName, equipments.EquipmentCode, equipments.EquipmentCategory, equipments.Description,warehouse.WareHouseName, equipments.Maintainace, equipments.MaintainaceDuration');
    $this->db->from('equipments');
    $this->db->join('warehouse','equipments.WareHouseName=warehouse.id','left');
    $query = $this->db->get();
    return $query->result();
  }

  public function getdetailview()
  {      
    
   
          $this->db->select('equipments.*');
          $this->db->from('equipments');
           $query = $this->db->get();
           return $query->result();
          
  }

  //dropdowns
  public function warehouseDropdown()
  {
    $this->db->select('warehouse.*');
    $this->db->from('warehouse');
    $query = $this->db->get();
    return $query->result();
  }
  // public function categoryDropdown()
  // {
  //   $this->db->select('callreasoandropdown.*');
  //   $this->db->from('callreasoandropdown');
  //   $query = $this->db->get();
  //   return $query->result();
  // }
       public function getbyid($id)
       {
        //  $this->db->select("enquiry.*");
         $this->db->where('id',$id);
         $query = $this->db->get('equipments');
         return $query->row();
       }
       public function updateEquipments($id, $fields)
       {
          $this->db->where('id',$id);
          return $this->db->update('equipments', $fields);
          // return $sql = $this->db->where('id',$model['id'])->update('enquiry',$model); 
       } 

}
?>