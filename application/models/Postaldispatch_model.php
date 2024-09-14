<?php
  class Postaldispatch_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      public function insertdata($model)
	{
		return $this->db->insert('postaldispatchdetails',$model);
			//return $sql->result();
	} 

     public function getallPostaldispatch()
     {      
      // SELECT studId, studentname, phone FROM `student_master`
        
      $this->db->select('postaldispatchdetails.Id,postaldispatchdetails.OutwordNo,postaldispatchdetails.OutwordLetterNo	,postaldispatchdetails.OutwordDate, postaldispatchdetails.Name,postaldispatchdetails.Address,postaldispatchdetails.IncomingNumber,postaldispatchdetails.IncomingDate,postaldispatchdetails.subject,postaldispatchdetails.subject,postaldispatchdetails.Remark,postaldispatchdetails.PostalCharges, postdisp.Location');
      $this->db->from('postaldispatchdetails');     
      $this->db->join('postdisp','postaldispatchdetails.Place = postdisp.Id','left');
      
              $query = $this->db->get();
              return $query->result();
              $query = $this->db->get();
              return $query->result();
      
            //  $this->db->select("postaldispatchdetails.*");
            //  $this->db->from('postaldispatchdetails');
            //   $query = $this->db->get();
            //   return $query->result();
             
     }

     
     public function getdetailview()
     {      
      // SELECT studId, studentname, phone FROM `student_master`
      
      $this->db->select('postaldispatchdetails.Id,postaldispatchdetails.OutwordNo,postaldispatchdetails.OutwordLetterNo	,postaldispatchdetails.OutwordDate, postaldispatchdetails.Name,postaldispatchdetails.Address,postaldispatchdetails.IncomingNumber,postaldispatchdetails.IncomingDate,postaldispatchdetails.subject,postaldispatchdetails.subject,postaldispatchdetails.Remark,postaldispatchdetails.PostalCharges, postdisp.Location');
      $this->db->from('postaldispatchdetails');     
      $this->db->join('postdisp','postaldispatchdetails.Place = postdisp.Id','left');
      
              $query = $this->db->get();
              return $query->result();
              $query = $this->db->get();
              return $query->result();
     }
      
     public function getdropdown()
     {      
      
             $this->db->select('postdisp.*');
             $this->db->from('postdisp');
              $query = $this->db->get();
              return $query->result();
             
     }



      //  public function getdetailview()
      //  {      
        
      //          $this->db->select('postaldispatchdetails.*');
      //          $this->db->from('postaldispatchdetails');
      //           $query = $this->db->get();
      //           return $query->result();
               
      //  }
       
    //    public function getbyid($id)
    //    {
    //      $this->db->select("teacherdetails.*");
    //      $this->db->where('Id',$id);
    //      $query = $this->db->get('teacherdetails');
    //      return $query->result();
    //    }
    //    public function update($model)
    //    {
    //       return $sql = $this->db->where('Id',$model['Id'])->update('teacherdetails',$model); 
    //    } 
}
?>