<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HsnInformation extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Hsninfo_model');

	}

	public function index()
	{
		$data['alldata'] = $this->Hsninfo_model->getallHsnInfo();
		// echo "<pre>";
		// print_r($data);

		$this->load->view('common/header_view');
		$this->load->view('inventory/hsnInformation/hsnInformationDetailsView', $data);
		$this->load->view('common/footer_view');
	}

	public function create()
	{
		$data['ServicesData'] = $this->Hsninfo_model->goodservicesdropdown();
		$data['GstTypeData'] = $this->Hsninfo_model->gsttypedropdown();
		$this->load->view('common/header_view');
		$this->load->view('inventory/hsnInformation/hsnInformation_view', $data);
		$this->load->view('common/footer_view');
	}

	public function update($id = null)
	{
		if ($id) {
			$data['data'] = $this->Hsninfo_model->getbyid($id);
			$data['ServicesData'] = $this->Hsninfo_model->goodservicesdropdown();
			$data['GstTypeData'] = $this->Hsninfo_model->gsttypedropdown();
		} else {
			$data['data'] = null;
		}

		$this->load->view('common/header_view');
		$this->load->view('inventory/hsnInformation/hsnInformation_update', $data);
		$this->load->view('common/footer_view');
	}

	function insertHsnInfo()
    {
        $HSNCode4digit = $this->input->post('HSNCode4digit');
        $HSNCode = $this->input->post('HSNCode');
        $Services = $this->input->post('Services');
        $GSTType = $this->input->post('GSTType');

        $fields = array(
            'HSNCode4digit' => $HSNCode4digit,
            'HSNCode' => $HSNCode,
            'Services' => $Services,
            'GSTType' => $GSTType
        );
        $this->Hsninfo_model->insertdata($fields);
        echo json_encode($fields);
    }

	public function updateHsnInfo()
    {
        $id = $this->input->post('id');
		$HSNCode4digit = $this->input->post('HSNCode4digit');
        $HSNCode = $this->input->post('HSNCode');
        $Services = $this->input->post('Services');
        $GSTType = $this->input->post('GSTType');

        $fields = array(
            'HSNCode4digit' => $HSNCode4digit,
            'HSNCode' => $HSNCode,
            'Services' => $Services,
            'GSTType' => $GSTType

        );
        $this->Hsninfo_model->updateHsnInfo($id, $fields);
        redirect('Inventory/HsnInformation/update/' . $id);
    }
}
