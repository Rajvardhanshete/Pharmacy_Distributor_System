<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Invoice_model');

    }
	
	
	public function index()
	{
		$data['alldata']=$this->Invoice_model->getdetailview();
        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view');
        $this->load->view('Invoice/invoiceDetailsview', $data);
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
		$this->load->view('common/header_view');
		$this->load->view('salse/invoice/Invoice_view');
		$this->load->view('common/footer_view');
	}

	function insertINVOICE(){
        $CustomerName= $this->input->post('CustomerName'); 
        $Date= $this->input->post('Date'); 
        $Barcode= $this->input->post('Barcode'); 
        $Id= $this->input->post('Id');
        $ProductName= $this->input->post('ProductName');
        $Unit= $this->input->post('Unit'); 
        $Batch= $this->input->post('Batch'); 
        $ExpiryDate= $this->input->post('ExpiryDate');
        $Rate= $this->input->post('Rate');
        $Qty= $this->input->post('Qty');
        $FreeQty= $this->input->post('FreeQty');
        $Amount= $this->input->post('Amount');
        $TotalAmount= $this->input->post('TotalAmount');
        $GSTAndDiscount= $this->input->post('GSTAndDiscount');
      
        
     
       $fields=array('CustomerName'=>$CustomerName,
                      'Date'=>$Date,
                      'Barcode'=>$Barcode,
                      
                      'ProductName'=>$ProductName,
                      'Unit'=>$Unit,
                      'Batch'=>$Batch,
                      'ExpiryDate'=> $ExpiryDate,
                      'Rate'=> $Rate,
                      'Qty'=> $Qty,
                      'FreeQty'=> $FreeQty,
                      'Amount'=> $Amount,
                      'TotalAmount'=> $TotalAmount,
                

        //  'created_date'=>date('Y-m-d H:i:s'),
        //      'created_by'=>1
            );
            $this->Invoice_model->insertdata($fields);
         echo json_encode($fields);
    //  $this->Teacher_model->insertRecord("teacherdetails",$fields);
   } 

    
}