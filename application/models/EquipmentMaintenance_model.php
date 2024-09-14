<?php
  class EquipmentMaintenance_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      public function insertdata($model)
	{
		return $this->db->insert('equipmentsmaintenance',$model);
			//return $sql->result();
	} 

    public function getallEquipmentMaintenance()
  {
    $this->db->select('equipmentsmaintenance.id, equipments.EquipmentName, equipmentsmaintenance.MaintenanceDetail, equipmentsmaintenance.MaintenanceDate, equipmentsmaintenance.NextMaintenanceDate, equipmentsmaintenance.Remark');
    $this->db->from('equipmentsmaintenance');
    $this->db->join('equipments','equipmentsmaintenance.Equipment=equipments.id','left');
    $query = $this->db->get();
    return $query->result();
  }

  public function getdetailview()
  {      
    
   
          $this->db->select('equipmentsmaintenance.*');
          $this->db->from('equipmentsmaintenance');
           $query = $this->db->get();
           return $query->result();
          
  }

  //dropdowns
  public function equipmentDropdown()
  {
    $this->db->select('equipments.*');
    $this->db->from('equipments');
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
         $query = $this->db->get('equipmentsmaintenance');
         return $query->row();
       }
       public function updateEquipmentMaintenance($id, $fields)
       {
          $this->db->where('id',$id);
          return $this->db->update('equipmentsmaintenance', $fields);
          // return $sql = $this->db->where('id',$model['id'])->update('enquiry',$model); 
       } 

}
?>