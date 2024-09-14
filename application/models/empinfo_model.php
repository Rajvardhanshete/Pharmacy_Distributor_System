<?php
  class empinfo_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      public function insertdata($model)
	{
		return $this->db->insert('empinfo',$model);
			//return $sql->result();
	} 

    public function getallPass()
    {      
     // SELECT studId, studentname, phone FROM `student_master`
     
            $this->db->select("empinfo.*");
            $this->db->from('empinfo');
             $query = $this->db->get();
             return $query->result();
            
    }
      



       public function getdetailview()
       {      
        
               $this->db->select('empinfo.*');
               $this->db->from('empinfo');
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
    // //    public function getbyid($id)
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
