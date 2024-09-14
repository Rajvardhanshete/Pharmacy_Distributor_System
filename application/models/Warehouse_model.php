<?php
  class Warehouse_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      public function insertdata($model)
	{
		return $this->db->insert('warehouse',$model);
			//return $sql->result();
	} 

    public function getallWarehouse()
  {
    $this->db->select('warehouse.*');
    $this->db->from('warehouse');
    $query = $this->db->get();
    return $query->result();
  }

  public function getdetailview()
  {      
    
   
          $this->db->select('warehouse.*');
          $this->db->from('warehouse');
           $query = $this->db->get();
           return $query->result();
          
  }

  //dropdowns
  // public function calltypeDropdown()
  // {
  //   $this->db->select('calltypedropdown.*');
  //   $this->db->from('calltypedropdown');
  //   $query = $this->db->get();
  //   return $query->result();
  // }
  // public function callreasoanDropdown()
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
         $query = $this->db->get('warehouse');
         return $query->row();
       }
       public function updateWarehouse($id, $fields)
       {
          $this->db->where('id',$id);
          return $this->db->update('warehouse', $fields);
          // return $sql = $this->db->where('id',$model['id'])->update('enquiry',$model); 
       } 

}
?>