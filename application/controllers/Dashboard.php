<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $data['kondisi'] = $this->M_App->tampil_data("station1", "id", "DESC", "1")->result();
        $id = 151;
        $data2['data_suhu_baru'] = $this->M_App->tampil_where("station1", $id)->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('template/footer', $data2);
    }
    function __construct()
    {
        parent::__construct();
        // Data login
        $this->session->userdata();

        if ($this->session->userdata('id') == "") {
            redirect(base_url("Login"));
        }
    }
}

/* End of file Controllername.php */
