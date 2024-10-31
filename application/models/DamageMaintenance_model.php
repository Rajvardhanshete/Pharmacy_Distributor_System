<?php
  class DamageMaintenance_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      public function insertdata($model)
	{
		return $this->db->insert('damagemaintenance',$model);
			//return $sql->result();
	} 

    public function getallEquipmentMaintenance()
  {
    $this->db->select('damagemaintenance.*');
    $this->db->from('damagemaintenance');
    $query = $this->db->get();
    return $query->result();
  }

  public function getdetailview()
  {      
    
   
          $this->db->select('damagemaintenance.*');
          $this->db->from('damagemaintenance');
           $query = $this->db->get();
           return $query->result();
          
  }

  //dropdowns
  // public function equipmentDropdown()
  // {
  //   $this->db->select('equipments.*');
  //   $this->db->from('equipments');
  //   $query = $this->db->get();
  //   return $query->result();
  // }
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
         $query = $this->db->get('damagemaintenance');
         return $query->row();
       }
       public function updateEquipmentMaintenance($id, $fields)
       {
          $this->db->where('id',$id);
          return $this->db->update('damagemaintenance', $fields);
          // return $sql = $this->db->where('id',$model['id'])->update('enquiry',$model); 
       } 

}
?>