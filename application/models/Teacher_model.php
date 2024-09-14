
<?php
  class Teacher_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      public function insertdata($model)
	{
		return $this->db->insert('teacher',$model);
			//return $sql->result();
	} 

     public function getallteachers()
     {      
      // SELECT studId, studentname, phone FROM `student_master`
      
      {      
        // SELECT studId, studentname, phone FROM `student_master`
        
        $this->db->select('teacher.Id,teacher.FullName,teacher.Address	,teacher.JoinDate, teacher.EndDate,teacher.DateOB,teacher.Mobile,teacher.Gender,quali.qualification,exp.experience');
        $this->db->from('teacher');     
        $this->db->join('quali','teacher.Qualification = quali.Id','left');
        $this->db->join('exp','teacher.Experience = exp.Id','left');
                $query = $this->db->get();
                return $query->result();
                $query = $this->db->get();
                return $query->result();
       }
             
     }
      



       public function getdetailview()
       {      
        // SELECT studId, studentname, phone FROM `student_master`
        
        $this->db->select('teacher.Id,teacher.FullName,teacher.Address	,teacher.JoinDate, teacher.EndDate,teacher.DateOB,teacher.Mobile,teacher.Gender,quali.qualification,exp.experience');
        $this->db->from('teacher');     
        $this->db->join('Quali','teacher.Qualification = quali.Id','left');
        $this->db->join('Exp','teacher.Experience = exp.Id','left');
                $query = $this->db->get();
                return $query->result();
                $query = $this->db->get();
                return $query->result();
       }
       
       public function getdropdown()
       {      
        
               $this->db->select('quali.*');
               $this->db->from('quali');
                $query = $this->db->get();
                return $query->result();
               
       }

       public function getdropdown1()
       {      
        
               $this->db->select('exp.*');
               $this->db->from('exp');
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