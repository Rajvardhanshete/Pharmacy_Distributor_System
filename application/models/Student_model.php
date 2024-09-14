
<?php
  class Student_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      public function insertdata($model)
	{
		return $this->db->insert('students',$model);
			//return $sql->result();
	} 

     public function getallstudents()
     {      
      // SELECT studId, studentname, phone FROM `student_master`
      
      $this->db->select('students.Id,students.FullName,students.Address	,students.Mobile, students.Email,students.Subject,students.DOB,students.Gender, year.Name');
      $this->db->from('students');
   
      $this->db->join('year','students.Std = year.Id','left');
              $query = $this->db->get();
              return $query->result();
              $query = $this->db->get();
              return $query->result();
     }
      



       public function getdetailview()
       {      
        // SELECT studId, studentname, phone FROM `student_master`
        
        $this->db->select('students.Id,students.FullName,students.Address	,students.Mobile, students.Email,students.DOB,students.Gender, year.Name,suub.Sub');
        $this->db->from('students');     
        $this->db->join('year','students.Std = year.Id','left');
        $this->db->join('suub','students.Std = suub.Id','left');
                $query = $this->db->get();
                return $query->result();
                $query = $this->db->get();
                return $query->result();
       }
        
  
       public function getdropdown()
       {      
        
               $this->db->select('year.*');
               $this->db->from('year');
                $query = $this->db->get();
                return $query->result();
               
       }
       public function getdropdown1()
       {      
        
               $this->db->select('suub.*');
               $this->db->from('suub');
                $query = $this->db->get();
                return $query->result();
               
       }
       
       public function getbyid($id)
       {
         $this->db->select("students.*");
         $this->db->where('Id',$id);
         $query = $this->db->get('students');
         return $query->result();
       }
       public function update($model)
       {
          return $sql = $this->db->where('Id',$model['Id'])->update('students',$model); 
       } 
}
?>