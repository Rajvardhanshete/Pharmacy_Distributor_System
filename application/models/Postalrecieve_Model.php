<?php
    class Postalrecieve_Model extends CI_Model{
        public function __construct()
        {
            $this->load->database();
        }

        
        public function insertdata($model)
      {
        return $this->db->insert('postalrecieve',$model);
          //return $sql->result();
      } 


        public function getallpostalrecieve()
        {
            // SELECT Id, PatientName, Date, Remark, FrameUser, Type, Unit, GlassType, BillAmount, RemainingAmount, TotalPaidAmount, fstPaymentMode, fstAmount, secPaymentMode, secAmount, thirdPaymentMode, thirdAmount, forthPaymentMode, forthAmount, Note

            // $this->db->select("postalrecieve.*");
            // $this->db->from('postalrecieve');
            // $query = $this->db->get();
            // return $query->result();
            $this->db->select('postalrecieve.Id,postalrecieve.InwordNo,postalrecieve.InwordDate	,postalrecieve.Name, postalrecieve.Address,postalrecieve.InNoReference,postalrecieve.InDateReference,postalrecieve.SubjectOfCorres,postalrecieve.Remark,postalrecieve.PostalCharges, postrec.Location');
            $this->db->from('postalrecieve');     
            $this->db->join('postrec','postalrecieve.Place = postrec.Id','left');
            
                    $query = $this->db->get();
                    return $query->result();
                    $query = $this->db->get();
                    return $query->result();
        }

        public function getdetailview()
        {      
         
            $this->db->select('postalrecieve.Id,postalrecieve.InwordNo,postalrecieve.InwordDate	,postalrecieve.Name, postalrecieve.Address,postalrecieve.InNoReference,postalrecieve.InDateReference,postalrecieve.SubjectOfCorres,postalrecieve.Remark,postalrecieve.PostalCharges, postrec.Location');
            $this->db->from('postalrecieve');     
            $this->db->join('postrec','postalrecieve.Place = postrec.Id','left');
            
                    $query = $this->db->get();
                    return $query->result();
                    $query = $this->db->get();
                    return $query->result();
                //  $query = $this->db->get();
                //  return $query->result();
                
        }

        public function getdropdown()
        {      
         
                $this->db->select('postrec.*');
                $this->db->from('postrec');
                 $query = $this->db->get();
                 return $query->result();
                
        }
        
    }
?>