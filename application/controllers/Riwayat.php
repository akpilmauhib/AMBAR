<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends CI_Controller
{

    public function index()
    {
        $data['riwayat'] = $this->M_App->tampil_data("station1", "id", "DESC")->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('riwayat', $data);
        $this->load->view('template/footer');
    }
}

/* End of file Controllername.php */