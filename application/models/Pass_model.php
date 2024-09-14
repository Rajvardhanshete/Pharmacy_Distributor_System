<?php
  class Pass_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      public function insertdata($model)
	{
		return $this->db->insert('pass',$model);
			//return $sql->result();
	} 

    public function getallPass()
    {      
     // SELECT studId, studentname, phone FROM `student_master`
     
            $this->db->select("pass.*");
            $this->db->from('pass');
             $query = $this->db->get();
             return $query->result();
            
    }
      



       public function getdetailview()
       {      
        
               $this->db->select('pass.*');
               $this->db->from('pass');
                $query = $this->db->get();
                return $query->result();
               
       }
       
    //    public function getdropdown()
    //    {      
        
    //            $this->db->select('ennn.*');
    //            $this->db->from('ennn');
    //             $query = $this->db->get();
    //             return $query->result();
               
    //    }
       public function getbyid($id)
       {
         $this->db->select("pass.*");
         $this->db->where('id',$id);
         $query = $this->db->get('pass');
         return $query->result();
       }
       public function update($model)
       {
          return $sql = $this->db->where('id',$model['id'])->update('pass',$model); 
       } 
}
?>