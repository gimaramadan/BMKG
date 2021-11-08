<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prospek_cuaca extends CI_Controller{
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_prospek', 'prospek');
     }
	public function index(){
		$data['judul'] = 'Prospek cuaca';
		$data['prospek'] = $this->prospek->get();
		$this->load->view('admin/template/sidebar', $data);
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/Prospek_cuaca/index', $data);
		$this->load->view('admin/template/footer');
	}

	public function save(){

		$name = time();

        $config['upload_path']          = './assets/uploads/';
        $config['allowed_types']        = 'pdf';
        $config['file_name'] = $name;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('file'))
        {
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);
            die;
        }
        else
        {
            $file_name_raw =  $this->upload->data();
            $file_name = $file_name_raw['file_name'];

            $data = [
            	'judul' => $this->input->post('judul'),
            	'tanggal' => $this->input->post('tanggal'),
            	'file' => $file_name
            ];

            $this->prospek->insert($data);
            
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Prospek berhasil ditambahkan
            </div>');
            redirect(base_url('prospek_cuaca'));
        }
	}

	public function delete($id)
	{
		$data = $this->prospek->getbyid($id);
		$path = './assets/uploads/' . $data['file'];
		unlink($path);
		$this->prospek->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Prospek berhasil dihapus
            </div>');
		redirect(base_url('prospek_cuaca'));
	}

	public function edit()
	{
		$id = $this->uri->segment(3);
		if($id === null){
			redirect(base_url('prospek_cuaca'));
		}else{
			$cek = $this->prospek->getbyid($id);
			if(!$cek){
				redirect(base_url('prospek_cuaca'));
			}else{
				$data['prospek_ubah'] = $this->prospek->getbyid($id);
				$data['judul'] = 'Prospek cuaca';
				$data['prospek'] = $this->prospek->get();
				$this->load->view('admin/template/sidebar', $data);
				$this->load->view('admin/template/header', $data);
				$this->load->view('admin/Prospek_cuaca/edit', $data);
				$this->load->view('admin/template/footer');
			}
			
		}
	}

	public function simpanubah()
	{
		$name = time();
		$id = $this->input->post('id');

        $config['upload_path']          = './assets/uploads/';
        $config['allowed_types']        = 'pdf';
        $config['file_name'] = $name;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('file'))
        {
            $data = [
            	'judul' => $this->input->post('judul'),
            	'tanggal' => $this->input->post('tanggal')
            ];

            $this->prospek->update($data, $id);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Prospek berhasil diubah
            </div>');
            redirect(base_url('prospek_cuaca'));
        }
        else
        {
        	$data = $this->prospek->getbyid($id);
			$path = './assets/uploads/' . $data['file'];
			unlink($path);

            $file_name_raw =  $this->upload->data();
            $file_name = $file_name_raw['file_name'];

            $data = [
            	'judul' => $this->input->post('judul'),
            	'tanggal' => $this->input->post('tanggal'),
            	'file' => $file_name
            ];

            $this->prospek->update($data, $id);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Prospek berhasil diubah
            </div>');
            redirect(base_url('prospek_cuaca'));
        }
	}

	public function download($id)
	{
		$this->load->helper('download');
		$data = $this->prospek->getbyid($id);
		$path = './assets/uploads/' . $data['file'];
		force_download($path, NULL);
	}
}