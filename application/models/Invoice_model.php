
<?php
  class Invoice_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      public function insertdata($model)
	{
		return $this->db->insert('invoices',$model);
			//return $sql->result();
	} 

     public function getallinvoices()
     {      
      // SELECT studId, studentname, phone FROM `student_master`
      
             $this->db->select("invoices.*");
             $this->db->from('invoices');
              $query = $this->db->get();
              return $query->result();
             
     }
      



       public function getdetailview()
       {      
        
               $this->db->select('invoices.*');
               $this->db->from('invoices');
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