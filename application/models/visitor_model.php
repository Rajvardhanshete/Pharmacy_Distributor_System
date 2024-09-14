<?php
  class visitor_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      public function insertdata($model)
	{
		return $this->db->insert('visit',$model);
			//return $sql->result();
	} 

     public function getallVisit()
     {      
     

        $this->db->select('visit.*');
        $this->db->from('visit');
        $query = $this->db->get();
        return $query->result();
      
           
     }
      



       public function getdetailview()
       {      
        
               $this->db->select('visit.*');
               $this->db->from('visit');
                $query = $this->db->get();
                return $query->result();
               
       }
       
       public function getdropdown()
       {      
        
               $this->db->select('visit.*');
               $this->db->from('visit');
                $query = $this->db->get();
                return $query->result();
               
       }
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