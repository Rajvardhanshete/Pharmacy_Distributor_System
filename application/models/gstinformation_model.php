<?php
  class GstInformation_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      public function insertdata($model)
	{
		return $this->db->insert('gstinformation',$model);
			//return $sql->result();
	} 

    public function getallGstInformation()
  {
    // $this->db->select('gstinformation.id,gstinformation.GSTName,gstinformation.GSTShortName,gstinformation.GSTPercentage,gstinformation.IGSTValue,gstinformation.CSGSTValue,gstinformation.SGSTValue,gstinformation.Description');
    // $this->db->from('gstinformation');
    // // $this->db->join('calltypedropdown','calllog.CallType=calltypedropdown.ID','left');
    // // $this->db->join('callreasoandropdown','calllog.CallReasoanType=callreasoandropdown.ID','left');

    $this->db->select("gstinformation.*");
    $this->db->from('gstinformation');
    $query = $this->db->get();
    return $query->result();
  }

  public function getdetailview()
  {      
    
   
          $this->db->select('gstinformation.*');
          $this->db->from('gstinformation');
           $query = $this->db->get();
           return $query->result();
          
  }
  
  public function getbyid($id)
  {
   //  $this->db->select("gstinformation.*");
    $this->db->where('id',$id);
    $query = $this->db->get('gstinformation');
    return $query->row();
  }
  public function updateGstInformation($id, $fields)
  {
   $this->db->where('id',$id);
   return $this->db->update('gstinformation', $fields);
  } 
}
?>