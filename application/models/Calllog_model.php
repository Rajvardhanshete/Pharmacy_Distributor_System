<?php
  class Calllog_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      public function insertdata($model)
	{
		return $this->db->insert('calllog',$model);
			//return $sql->result();
	} 

    public function getallCalllogs()
  {
    $this->db->select('calllog.id,calltypedropdown.Calltype,callreasoandropdown.CallResType,calllog.Callpname,calllog.EmpName	,calllog.Calldate,calllog.CallTime,calllog.NextFollowDate,calllog.CallDescription,calllog.Feedback');
    $this->db->from('calllog');
    $this->db->join('calltypedropdown','calllog.CallType=calltypedropdown.ID','left');
    $this->db->join('callreasoandropdown','calllog.CallReasoanType=callreasoandropdown.ID','left');


    $query = $this->db->get();
    return $query->result();
  }

  public function getdetailview()
  {      
    
   
          $this->db->select('calllog.*');
          $this->db->from('calllog');
           $query = $this->db->get();
           return $query->result();
          
  }

  //dropdowns
  public function calltypeDropdown()
  {
    $this->db->select('calltypedropdown.*');
    $this->db->from('calltypedropdown');
    $query = $this->db->get();
    return $query->result();
  }
  public function callreasoanDropdown()
  {
    $this->db->select('callreasoandropdown.*');
    $this->db->from('callreasoandropdown');
    $query = $this->db->get();
    return $query->result();
  }
       public function getbyid($id)
       {
        //  $this->db->select("enquiry.*");
         $this->db->where('id',$id);
         $query = $this->db->get('calllog');
         return $query->row();
       }
       public function updateCalllog($id, $fields)
       {
          $this->db->where('id',$id);
          return $this->db->update('calllog', $fields);
          // return $sql = $this->db->where('id',$model['id'])->update('enquiry',$model); 
       } 

}
?>