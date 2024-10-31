
<?php
  class branchInformation_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      public function insertdatabranchinformation($model)
      {
        return $this->db->insert('branchinformation',$model);
          //return $sql->result();
      } 

     public function getallBranchInformation()
     {      
      // SELECT studId, studentname, phone FROM `student_master`
      
             $this->db->select("branchinformation.*");
             $this->db->from('branchinformation');
              $query = $this->db->get();
              return $query->result();
             
     }
     public function getParty()
  {      
          $this->db->select('partydetails.*');
          $this->db->from('partydetails');
           $query = $this->db->get();
           return $query->result();
          
  }

      



       public function getdetailview()
       {      
        
               $this->db->select('branchinformation.*');
               $this->db->from('branchinformation');
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