<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
        // Fungsi Login

        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $user = $this->db->get_where('tbuser', ['email' => $email])->row_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('account/v_login');
        } else if (password_verify($password, $user['password'])) {
            $data = [
                'email' => $user['email'],
                'role_id' => $user['role_id']
            ];

            $this->session->set_userdata($data);

            if ($user['role_id'] == 1) {
                redirect('admin');
        }

        // End fungsi login

        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Login gagal, password atau email salah!
			  </div>');
             redirect('login');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbuser.email]', [
            'is_unique' => 'Email ini telah terdaftar!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[password_conf]', [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek'
        ]);
        $this->form_validation->set_rules('password_conf', 'Password', 'required|trim|matches[password]');
        $this->form_validation->set_rules('no_telp_user', 'No_HP', 'required|trim');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('account/v_register');
        } else {
            $email = $this->input->post("email", true);
            $no_telp_user = $this->input->post("no_telp_user", true);

            $password = $this->input->post('password', true);
            $password = password_hash($password, PASSWORD_DEFAULT);

            $data = array(
                'username'     => $this->input->post("username", true),
                'email'         => $email,
                'password'      => $password,
                'no_telp'      => $no_telp_user,
                'role_id'       => 1
            );

            $this->db->insert('tbuser', $data);


        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat! Akun kamu telah berhasil dibuat. Silahkan sign in.
          </div>');

            redirect('login');
        }
    }

    public function logout()
    {
        // $this->simple_login->logout();
        // $this->session->unset_userdata('email');
        // $this->session->unset_userdata('role_id');
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Anda telah berhasil Logout.
          </div>');

        redirect('login');
    }
}
