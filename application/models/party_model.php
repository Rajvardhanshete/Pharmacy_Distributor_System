
<?php
class party_model extends CI_Model
{
  public function __construct()
  {
    $this->load->database();
  }

  public function insertdata($model)
  {
    return $this->db->insert('partydetails', $model);
    //return $sql->result();
  }

  public function getallPartyCategory()
  {
    // SELECT studId, studentname, phone FROM `student_master`

    $this->db->select("partydetails.*");
    $this->db->from('partydetails');
    $query = $this->db->get();
    return $query->result();
  }

  public function getdetailview()
  {

    $this->db->select('partydetails.*');
    $this->db->from('partydetails');
    $query = $this->db->get();
    return $query->result();
  }

  public function getbyid($id)
  {
    //  $this->db->select("enquiry.*");
    $this->db->where('id', $id);
    $query = $this->db->get('partydetails');
    return $query->row();
  }

  public function updateParty($id, $fields)
  {
    $this->db->where('id', $id);
    return $this->db->update('partydetails', $fields);
    // return $sql = $this->db->where('id',$model['id'])->update('enquiry',$model); 
  }
}
?>