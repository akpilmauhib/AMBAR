<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Xls extends CI_Controller
{

    public function xls()
    {
        $data['riwayat'] = $this->M_App->tampil_data("station1", "id", "DESC")->result();
        $this->load->view('laporanxls', $data);
    }
}
