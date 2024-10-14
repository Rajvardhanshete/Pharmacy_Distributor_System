<?php
defined('BASEPATH') or exit('No direct script access allowed');

class party extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('party_model');
    }


    public function index()
    {
        $data['alldata'] = $this->party_model->getallPartyCategory();
        // echo "<pre>";
        // print_r($data);

        $this->load->view('common/header_view');
        $this->load->view('hr/party/partyDetailsview', $data);
        $this->load->view('common/footer_view');
    }
    public function create()
    {
        $this->load->view('common/header_view');
        $this->load->view('hr/party/party_view');
        $this->load->view('common/footer_view');
    }

    public function update($id = null)
    {
        if ($id) {
            $data['data'] = $this->party_model->getbyid($id);
        } else {
            $data['data'] = null;
        }
        $this->load->view('common/header_view');
        $this->load->view('hr/party/party_update', $data);
        $this->load->view('common/footer_view');
    }

    function insertParty()
    {
        $PartyName = $this->input->post('PartyName');
        $PartyShortName = $this->input->post('PartyShortName');
        $Description = $this->input->post('Description');

        $fields = array(
            'PartyName' => $PartyName,
            'PartyShortName' => $PartyShortName,
            'Description' => $Description
        );
        $this->party_model->insertdata($fields);
        echo json_encode($fields);
        //  $this->Teacher_model->insertRecord("teacherdetails",$fields);
    }

    function updateParty()
    {
        $id = $this->input->post('id');
        $PartyName = $this->input->post('PartyName');
        $PartyShortName = $this->input->post('PartyShortName');
        $Description = $this->input->post('Description');

        $fields = array(
            'PartyName' => $PartyName,
            'PartyShortName' => $PartyShortName,
            'Description' => $Description
        );
        $this->party_model->updateParty($id,$fields);
        redirect('HR/party/update/'.$id);
    }
}
