<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->model('M_prospek', 'prospek');
        $this->load->helper('download');
    }

    public function index()
    {   
        // $data = file_get_contents('https://ibnux.github.io/BMKG-importer/cuaca/501369.json');
        // $data2 = json_decode($data);

        // var_dump($data2);
        // die;
        

        $data['visi'] =  $this->admin_model->visi()->result();
        $data['misi'] =  $this->admin_model->visi()->result();
        $data['profil'] = $this->db->get('tb_profil');

        $this->load->view('user/home',$data);
    }

    public function KTP()
    {
        // $data['registrasi'] =  $this->user_model->KTP()->result_array();
        // $this->load->view('user/KTP/registktp', $data);

        $this->load->view('user/KTP');
    }

     public function buletin()
    {
        // $data['registrasi'] =  $this->user_model->KTP()->result_array();
        // $this->load->view('user/KTP/registktp', $data);

        $data['berkas'] = $this->db->get('tb_berkas');
        $this->load->view('user/buletin',$data);
    }

    function download($id)
    {
        $data = $this->db->get_where('tb_berkas',['kd_berkas'=>$id])->row();
        force_download('uploads/'.$data->nama_berkas,NULL);
    }

    public function prospekuser()
    {
        $data['prospekuser'] = $this->prospek->prospekdesc();
        // $data['prospekuser'] = $this->db->get('tbl_prospek');
        $this->load->view('user/prospek', $data);
    }
    public function artikel()
    {
        $data['artikel'] = $this->admin_model->artikeldesc();

        $this->load->view('user/artikel', $data);
    }

    public function detail($id)
    {
        $data['artikel'] = $this->db->get_where('tbl_article', array('article_id' => $id));
        $data['artikelnew'] = $this->admin_model->artikelnew();

        $this->load->view('user/detail_artikel', $data);
    }

    public function kirim_saran()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'isi' => $this->input->post('isi')
        ];

        $this->db->insert('tbl_saran', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Saran berhasil terkirim!
              </div>');
            redirect('');
    }

}
