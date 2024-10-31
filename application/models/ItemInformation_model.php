<?php
  class ItemInformation_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      public function insertdata($model)
	{
		return $this->db->insert('iteminformation',$model);
			//return $sql->result();
	} 

    public function getallItem()
  {
    // $this->db->select('itemcatogoryinfo.*');
    // $this->db->from('itemcatogoryinfo');
    // $query = $this->db->get();
    // return $query->result();


    $this->db->select('iteminformation.id,iteminformation.ItemName,itemcatogoryinfo.ItemCategoryName	,iteminformation.BrandName, iteminformation.Unit,iteminformation.MinStock,iteminformation.MaxStock,iteminformation.PurchasePrice,iteminformation.SalePrice,partydetails.PartyName,iteminformation.ItemDescription,hsninformation.HSNCode4digit, gstinformation.GSTName');
    $this->db->from('iteminformation');     
    $this->db->join('partydetails','partydetails.id = iteminformation.Party','left');
    $this->db->join('itemcatogoryinfo','itemcatogoryinfo.id = iteminformation.ItemCategory','left');
    $this->db->join('hsninformation','hsninformation.id = iteminformation.HSN','left');
    $this->db->join('gstinformation','gstinformation.id = iteminformation.GST','left');
    
            $query = $this->db->get();
            return $query->result();
            $query = $this->db->get();
            return $query->result();

  }
    public function getItemCat()
  {
    $this->db->select('itemcatogoryinfo.*');
    $this->db->from('itemcatogoryinfo');
    $query = $this->db->get();
    return $query->result();
  }
    public function getallGSTInfo()
  {
    $this->db->select('gstinformation.*');
    $this->db->from('gstinformation');
    $query = $this->db->get();
    return $query->result();
  }
    public function getallHSNInfo()
  {
    $this->db->select('hsninformation.*');
    $this->db->from('hsninformation');
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

  //dropdowns
  // public function calltypeDropdown()
  // {
  //   $this->db->select('calltypedropdown.*');
  //   $this->db->from('calltypedropdown');
  //   $query = $this->db->get();
  //   return $query->result();
  // }
  // public function callreasoanDropdown()
  // {
  //   $this->db->select('callreasoandropdown.*');
  //   $this->db->from('callreasoandropdown');
  //   $query = $this->db->get();
  //   return $query->result();
  // }
       public function getbyid($id)
       {
        //  $this->db->select("enquiry.*");
         $this->db->where('id',$id);
         $query = $this->db->get('iteminformation');
         return $query->row();
       }
       public function updateItemInformation($id, $fields)
       {
          $this->db->where('id',$id);
          return $this->db->update('iteminformation', $fields);
          // return $sql = $this->db->where('id',$model['id'])->update('enquiry',$model); 
       } 

}
?>