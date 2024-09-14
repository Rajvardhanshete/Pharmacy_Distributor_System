
<?php
  class Staff_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      public function insertdata($model)
	{
		return $this->db->insert('staff',$model);
			//return $sql->result();
	} 

     public function getallstaff()
     {      
      // SELECT studId, studentname, phone FROM `student_master`
      
             $this->db->select("staff.*");
             $this->db->from('staff');
              $query = $this->db->get();
              return $query->result();
             
     }
      



       public function getdetailview()
       {      
        
               $this->db->select('staff.*');
               $this->db->from('staff');
                $query = $this->db->get();
                return $query->result();
               
       }
       
       public function getbyid($id)
       {
         $this->db->select("staff.*");
         $this->db->where('Id',$id);
         $query = $this->db->get('staff');
         return $query->result();
       }
       public function update($model)
       {
          return $sql = $this->db->where('Id',$model['Id'])->update('staff',$model); 
       } 
}
?>