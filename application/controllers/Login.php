<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('login');
    }
    public function forgot()
    {
        $this->load->view('template/header');
        $this->load->view('forgot_password');
    }
    public function register()
    {
        $this->load->view('template/header');
        $this->load->view('register');
    }
    public function update_pw()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $sandi_md5 = md5($password);

        $where = array('email' => $email,);
        $data = array('password' => $sandi_md5,);
        $stat = $this->M_App->proses_update($where, $data, "user");
        redirect(base_url("Login"));
    }

    function auth()
    {
        // $relasi = 'Admin';
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $sandi_md5 = md5($password); // konversi ke encrypt => Md5

        // Menampilkan data login
        $where = array(
            'email' => $email,
            'password' => $sandi_md5
        );

        $stat = $this->M_App->cek_akun($where, 'user')->num_rows();
        if ($stat > 0) {
            $data = $this->M_App->cek_akun($where, 'user')->result();
            foreach ($data as $data);

            $datalogin = array(
                'id' => $data->id,
                'email' => $data->email,
                'password' => $data->password,
                // 'relasi'=> $relasi
            );
            // var_dump($datalogin);
            $this->session->set_userdata($datalogin);
            // echo "Masuk";
            header('location:' . base_url() .'/Dashboard');
        } else {
            // echo "Tidak Masuk";
            header('location:' . base_url() . 'Login');
        }
    }

    function logout()
    {
        $this->session->sess_destroy(); // Destroy data login sebelumnya
        header('location:' . base_url() . 'Login');
    }
}



/* End of file Controllername.php */
