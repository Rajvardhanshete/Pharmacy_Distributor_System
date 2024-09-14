<?php
  class Enquiry_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      public function insertdata($model)
	{
		return $this->db->insert('enquiry',$model);
			//return $sql->result();
	} 

     public function getallEnquiry()
     {      
     
      $this->db->select('enquiry.id,enquiry.EnquiryName,enquiry.EnquiryTime	,enquiry.Date,enquiry.ReferenceName,enquiry.ReferenceNo,enquiry.EnquiryReason, ennn.Name');
      $this->db->from('enquiry');
      $this->db->join('ennn','enquiry.ReferenceType=ennn.ID','left');
      $query = $this->db->get();
      return $query->result();
      
              $query = $this->db->get();
              return $query->result();
             
     }
      



       public function getdetailview()
       {      
        
               $this->db->select('enquiry.*');
               $this->db->from('enquiry');
                $query = $this->db->get();
                return $query->result();
               
       }
       
       public function getdropdown()
       {      
        
               $this->db->select('ennn.*');
               $this->db->from('ennn');
                $query = $this->db->get();
                return $query->result();
               
       }
       public function getbyid($id)
       {
        //  $this->db->select("enquiry.*");
         $this->db->where('id',$id);
         $query = $this->db->get('enquiry');
         return $query->row();
       }
       public function updateEnquiry($id, $fields)
       {
          $this->db->where('id',$id);
          return $this->db->update('enquiry', $fields);
          // return $sql = $this->db->where('id',$model['id'])->update('enquiry',$model); 


       } 

    

}

?>