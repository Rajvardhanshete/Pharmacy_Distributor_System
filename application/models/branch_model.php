
<?php
  class branch_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      public function insertdataBranchinformation($model)
	{
		return $this->db->insert('branch',$model);
			//return $sql->result();
	} 

     public function getallstaff()
     {      
      // SELECT studId, studentname, phone FROM `student_master`
      
             $this->db->select("branch.*");
             $this->db->from('branch');
              $query = $this->db->get();
              return $query->result();
             
     }
      



       public function getdetailview()
       {      
        
               $this->db->select('branch.*');
               $this->db->from('branch');
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