
<?php
  class complain_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      public function insertdata($model)
	{
		return $this->db->insert('complaint',$model);
			//return $sql->result();
	} 

     public function getallcomplain()
     {      
      // SELECT studId, studentname, phone FROM `student_master`
      
             $this->db->select("complaint.*");
             $this->db->from('complaint');
              $query = $this->db->get();
              return $query->result();
             
     }
      



       public function getdetailview()
       {      
        
               $this->db->select('complaint.*');
               $this->db->from('complaint');
                $query = $this->db->get();
                return $query->result();
               
       }
       
       public function getbyid($id)
       {
        //  $this->db->select("complaint.*");
         $this->db->where('id',$id);
         $query = $this->db->get('complaint');
         return $query->row();
       }
       public function updateComplain($id, $fields)
       {
        $this->db->where('id',$id);
        return $this->db->update('complaint', $fields);
       } 
}
?>