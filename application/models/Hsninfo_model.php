<?php
class Hsninfo_model extends CI_Model
{
  public function __construct()
  {
    $this->load->database();
  }

  public function insertdata($model)
  {
    return $this->db->insert('hsninformation', $model);
    //return $sql->result();
  }

  public function getallHsnInfo()
  {
    $this->db->select('hsninformation.id,hsninformation.HSNCode4digit,hsninformation.HSNCode,goodservicesdropdown.GoodServices,gsttypedropdown.Gsttype');
    $this->db->from('hsninformation');
    $this->db->join('goodservicesdropdown', 'hsninformation.Services=goodservicesdropdown.ID', 'left');
    $this->db->join('gsttypedropdown', 'hsninformation.GSTType=gsttypedropdown.ID', 'left');


    $query = $this->db->get();
    return $query->result();
  }

  public function getdetailview()
  {


    $this->db->select('hsninformation.*');
    $this->db->from('hsninformation');
    $query = $this->db->get();
    return $query->result();
  }

  //dropdowns
  public function goodservicesdropdown()
  {
    $this->db->select('goodservicesdropdown.*');
    $this->db->from('goodservicesdropdown');
    $query = $this->db->get();
    return $query->result();
  }
  public function gsttypedropdown()
  {
    $this->db->select('gsttypedropdown.*');
    $this->db->from('gsttypedropdown');
    $query = $this->db->get();
    return $query->result();
  }


  public function getbyid($id)
  {
    //  $this->db->select("enquiry.*");
    $this->db->where('id', $id);
    $query = $this->db->get('hsninformation');
    return $query->row();
  }


  public function updateHsnInfo($id, $fields)
  {
    $this->db->where('id', $id);
    return $this->db->update('hsninformation', $fields);
    // return $sql = $this->db->where('id',$model['id'])->update('enquiry',$model); 
  }
}
