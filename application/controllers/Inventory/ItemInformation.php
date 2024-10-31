<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ItemInformation extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('ItemInformation_model');

    }
    public function index()
    {
        $data['alldata']=$this->ItemInformation_model->getallItem();
        $this->load->view('common/header_view');
		$this->load->view('inventory/itemInformation/itemInformation_DetailsView',$data);      
		$this->load->view('common/footer_view');
    }
	
    
    public function create()
	{
        $data['itemcat']= $this->ItemInformation_model->getItemCat();
        $data['gst']= $this->ItemInformation_model->getallGSTInfo();
        $data['hsn']= $this->ItemInformation_model->getallHSNInfo();
        $data['party']= $this->ItemInformation_model->getParty();
      

		$this->load->view('common/header_view');
		$this->load->view('inventory/itemInformation/itemInformation_view',$data);      
		$this->load->view('common/footer_view');
	} 	
	
    public function update($id=null)
    {
     if($id){
         $data['data']= $this->ItemInformation_model->getbyid($id);
         $data['itemcat']= $this->ItemInformation_model->getItemCat();
         $data['gst']= $this->ItemInformation_model->getallGSTInfo();
         $data['hsn']= $this->ItemInformation_model->getallHSNInfo();
         $data['party']= $this->ItemInformation_model->getParty();
         
        }
        else{
            $data['data']=null;
            $data['itemcat']= null;
            $data['gst']= null;
            $data['hsn']= null;
            $data['party']= null;
        }
        
       
         $this->load->view('common/header_view');
         $this->load->view('inventory/itemInformation/itemInformation_update',$data);
         $this->load->view('common/footer_view');
     
     }

	function insertItemInformation(){
        $ItemName= $this->input->post('ItemName'); 
        $ItemCategory= $this->input->post('ItemCategory'); 
        $BrandName= $this->input->post('BrandName'); 
        $Unit= $this->input->post('Unit');
        $MinStock= $this->input->post('MinStock');
        $MaxStock= $this->input->post('MaxStock'); 
        $PurchasePrice= $this->input->post('PurchasePrice'); 
        $SalePrice= $this->input->post('SalePrice'); 
        $Party= $this->input->post('Party'); 
        $ItemDescription= $this->input->post('ItemDescription'); 
        $HSN= $this->input->post('HSN'); 
        $GST= $this->input->post('GST'); 
          
     
       $fields=array('ItemName'=>$ItemName,
                      'ItemCategory'=>$ItemCategory,
                      'BrandName'=>$BrandName,
                      'Unit'=>$Unit,
                      'MinStock'=>$MinStock,
                      'MaxStock'=>$MaxStock,
                      'PurchasePrice'=>$PurchasePrice,
                      'SalePrice'=>$SalePrice,
                      'Party'=>$Party,
                      'ItemDescription'=>$ItemDescription,
                      'HSN'=>$HSN,
                      'GST'=>$GST

            );
            $this->ItemInformation_model->insertdata($fields);
         echo json_encode($fields);
    //  $this->Teacher_model->insertRecord("teacherdetails",$fields);
   } 	
   public function updateEquipments()
   {
        $id = $this->input->post('id');
        $ItemName= $this->input->post('ItemName'); 
        $ItemCategory= $this->input->post('ItemCategory'); 
        $BrandName= $this->input->post('BrandName'); 
        $Unit= $this->input->post('Unit');
        $MinStock= $this->input->post('MinStock');
        $MaxStock= $this->input->post('MaxStock'); 
        $PurchasePrice= $this->input->post('PurchasePrice'); 
        $SalePrice= $this->input->post('SalePrice'); 
        $Party= $this->input->post('Party'); 
        $ItemDescription= $this->input->post('ItemDescription'); 
        $HSN= $this->input->post('HSN'); 
        $GST= $this->input->post('GST'); 
          
     
       $fields=array('ItemName'=>$ItemName,
                      'ItemCategory'=>$ItemCategory,
                      'BrandName'=>$BrandName,
                      'Unit'=>$Unit,
                      'MinStock'=>$MinStock,
                      'MaxStock'=>$MaxStock,
                      'PurchasePrice'=>$PurchasePrice,
                      'SalePrice'=>$SalePrice,
                      'Party'=>$Party,
                      'ItemDescription'=>$ItemDescription,
                      'HSN'=>$HSN,
                      'GST'=>$GST
      );
$this->ItemInformation_model->updateItemInformation($id, $fields);
redirect('WareHouse/EquipmentMaster/update/'.$id);
}
	
}
