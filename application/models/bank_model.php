
<?php
  class bank_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      public function insertdata($model)
	{
		return $this->db->insert('bank',$model);
			//return $sql->result();
	} 

     public function getallstaff()
     {      
      // SELECT studId, studentname, phone FROM `student_master`
      
             $this->db->select("bank.*");
             $this->db->from('bank');
              $query = $this->db->get();
              return $query->result();
             
     }
      



       public function getdetailview()
       {      
        
               $this->db->select('bank.*');
               $this->db->from('bank');
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