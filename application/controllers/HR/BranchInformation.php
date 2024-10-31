<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branchinformation extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('branchInformation_model');

    }
	
    
    public function index()
	{
		$data['alldata']=$this->branchInformation_model->getallBranchInformation();
        


		$this->load->view('common/header_view');
		$this->load->view('hr/branchInformation/branchInformation_detailview', $data);      
		$this->load->view('common/footer_view');
	} 	
	
    public function create()
	{
        $data['party']= $this->branchInformation_model->getParty();
      

		$this->load->view('common/header_view');
		$this->load->view('hr/branchInformation/branchInformation_view', $data);      
		$this->load->view('common/footer_view');
	} 	
	
	function insertBranchinformation()
	{
        $BranchName= $this->input->post('BranchName'); 
        $PartyName= $this->input->post('PartyName'); 
        $GSTNumber= $this->input->post('GSTNumber'); 
        $PANNumber= $this->input->post('PANNumber');
        $StartTime= $this->input->post('StartTime');
        $EndTime= $this->input->post('EndTime');  
        $HACDisplayName= $this->input->post('HACDisplayName');  
        $ContactNo= $this->input->post('ContactNo');  
        $Email= $this->input->post('Email');  
        $PurchaseEmail= $this->input->post('PurchaseEmail');  
        $SalesEmail= $this->input->post('SalesEmail');  
        $Website= $this->input->post('Website');  
        $FacebookLink= $this->input->post('FacebookLink');  
        $GooglePlus= $this->input->post('GooglePlus');  
        $TwitterLink= $this->input->post('TwitterLink');  
        $LinkedinLink= $this->input->post('LinkedinLink');  
        $InstagramLink= $this->input->post('InstagramLink');  
        $PersonName= $this->input->post('PersonName');  
        $PersonDesignation= $this->input->post('PersonDesignation');  
        $PersonContactNumber= $this->input->post('PersonContactNumber');  
        $PersonAlternetNumber= $this->input->post('PersonAlternetNumber');  
        $PersonEmail= $this->input->post('PersonEmail');  
        $Address= $this->input->post('Address');  
        $BillingPlace= $this->input->post('BillingPlace');  
        $BillingPincode= $this->input->post('BillingPincode');  
        $BillingThasil= $this->input->post('BillingThasil');  
        $BillingDestrict= $this->input->post('BillingDestrict');  
        $BillingState= $this->input->post('BillingState');  
        $BillingCountry= $this->input->post('BillingCountry');  
        $CheckboxSameAddress= $this->input->post('CheckboxSameAddress');  
        $ShippingAddress= $this->input->post('ShippingAddress');  
        $ShippingPlace= $this->input->post('ShippingPlace');  
        $ShippingPincode= $this->input->post('ShippingPincode');  
        $ShippingThasil= $this->input->post('ShippingThasil');  
        $ShippingDestrict= $this->input->post('ShippingDestrict');  
        $ShippingState= $this->input->post('ShippingState');  
        $ShippingCountry= $this->input->post('ShippingCountry');  
        $OpeningBalance= $this->input->post('OpeningBalance');  
        $BankName= $this->input->post('BankName');  
        $BankBranchName= $this->input->post('BankBranchName');  
        $BankAccountNumber= $this->input->post('BankAccountNumber');  
        $BankAccountHolderNumber= $this->input->post('BankAccountHolderNumber');  
        $BankIFSCCode= $this->input->post('BankIFSCCode');  
        $BankMICRCode= $this->input->post('BankMICRCode');  
        $CheckboxActive= $this->input->post('CheckboxActive');  
     
       $fields=array('BranchName'=>$BranchName,
                      'PartyName'=>$PartyName,
                      'GSTNumber'=>$GSTNumber,
                      'PANNumber'=>$PANNumber,
                      'StartTime'=>$StartTime,
                      'EndTime'=>$EndTime,
                      'HACDisplayName'=>$HACDisplayName,
                      'ContactNo'=>$ContactNo,
                      'Email'=>$Email,
                      'PurchaseEmail'=>$PurchaseEmail,
                      'SalesEmail'=>$SalesEmail,
                      'Website'=>$Website,
                      'FacebookLink'=>$FacebookLink,
                      'GooglePlus'=>$GooglePlus,
                      'TwitterLink'=>$TwitterLink,
                      'LinkedinLink'=>$LinkedinLink,
                      'InstagramLink'=>$InstagramLink,
                      'PersonName'=>$PersonName,
                      'PersonDesignation'=>$PersonDesignation,
                      'PersonContactNumber'=>$PersonContactNumber,
                      'PersonAlternetNumber'=>$PersonAlternetNumber,
                      'PersonEmail'=>$PersonEmail,
                      'Address'=>$Address,
                      'BillingPlace'=>$BillingPlace,
                      'BillingPincode'=>$BillingPincode,
                      'BillingThasil'=>$BillingThasil,
                      'BillingDestrict'=>$BillingDestrict,
                      'BillingState'=>$BillingState,
                      'BillingCountry'=>$BillingCountry,
                      'CheckboxSameAddress'=>$CheckboxSameAddress,
                      'ShippingAddress'=>$ShippingAddress,
                      'ShippingPlace'=>$ShippingPlace,
                      'ShippingPincode'=>$ShippingPincode,
                      'ShippingThasil'=>$ShippingThasil,
                      'ShippingDestrict'=>$ShippingDestrict,
                      'ShippingState'=>$ShippingState,
                      'ShippingCountry'=>$ShippingCountry,
                      'OpeningBalance'=>$OpeningBalance,
                      'BankName'=>$BankName,
                      'BankBranchName'=>$BankBranchName,
                      'BankAccountNumber'=>$BankAccountNumber,
                      'BankAccountHolderNumber'=>$BankAccountHolderNumber,
                      'BankIFSCCode'=>$BankIFSCCode,
                      'BankMICRCode'=>$BankMICRCode,
                      'CheckboxActive'=>$CheckboxActive
            );
            $this->branchInformation_model->insertdatabranchinformation($fields);
         echo json_encode($fields);
    //  $this->Teacher_model->insertRecord("teacherdetails",$fields);
   } 	
}
