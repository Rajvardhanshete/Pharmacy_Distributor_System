<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Invoice_model');

    }

    public function create()
	{
		$this->load->view('common/header_view');
		$this->load->view('salse/branch/branch_view');
		$this->load->view('common/footer_view');
	}
}