<?php
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');

		if ($this->session->userdata("email") == null) {
			redirect('login');
		}
	}

	public function index()
	{
		// $data = $this->session->userdata();
		// var_dump($data);
		// die;
		$data['judul'] = 'Admin';
		$this->load->view('admin/template/sidebar', $data);
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/dashbord/index', $data);
		$this->load->view('admin/template/footer');
	}

	public function visi()
	{
		$data['visi'] =  $this->admin_model->Visi()->result_array();
		$this->load->view('admin/template/sidebar', $data);
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/visi/visimisi', $data);
		$this->load->view('admin/template/footer');
	}

	public function changepassword()
	{
		$email = $this->session->userdata('email');

		$data['user'] = $this->db->get_where('tbuser', ['email' => $email])->row_array();

		$data["data"] = $this->admin_model->getdata($email)->row_array();

		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[password_conf]', [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek'
        ]);
        $this->form_validation->set_rules('password_conf', 'Password', 'required|trim|matches[password]');

		$password = $this->input->post('password', true);
        $password = password_hash($password, PASSWORD_DEFAULT);

				if ($this->form_validation->run() == FALSE) {
					$this->load->view('admin/template/sidebar', $data);
					$this->load->view('admin/template/header', $data);
					$this->load->view('account/v_reset_password', $data);
					$this->load->view('admin/template/footer');
				} else {
					$this->db->update('tbuser', ['password' => $password], ['email' => $email]);

					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					Password Berhasil Diganti!
				  	</div>');

					redirect('admin/changepassword');
				}
	}

	public function visi_edit($id)
	{

		if ($this->session->userdata("role_id") == "1") {

			// $id = $this->uri->segment(3);

			$data['visi'] =  $this->admin_model->EditVisi($id)->row_array();

			$this->form_validation->set_rules('visi', 'Visi', 'required');
			$this->form_validation->set_rules('misi', 'Misi', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/template/sidebar', $data);
				$this->load->view('admin/template/header', $data);
				$this->load->view('admin/visi/edit', $data);
				$this->load->view('admin/template/footer');
			} else {
				$nama		= $this->input->post('visi');
				$deskripsi 		= $this->input->post('misi');

				$this->db->set('visi', $nama);
				$this->db->set('misi', $deskripsi);
				$this->db->update('tbvisi_misi');

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					Visi Misi berhasil dirubah
					 </div>');
				redirect("admin/visi");
			}
		} else {
			redirect('admin');
		}
	}

	public function visi_update()
	{

		if ($this->session->userdata("role_id") == "1") {

			$id = $this->uri->segment(3);

			$in_data['visi'] 	= $this->input->post('visi');
			$in_data['Misi'] 	= $this->input->post('Misi');

			$this->db->update("tbvisi_misi", $in_data, $id);


			$this->session->set_flashdata('update', 'OK');
			redirect("admin/visi");
		} else {
			redirect('admin');
		}
	}

	public function visi_delete()
	{

		if ($this->session->userdata("role_id") == "1") {

			$id = $this->uri->segment(3);

			$this->db->delete('tbvisi_misi', array('id_visi' => $id));

			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Visi Misi berhasil dihapus!
			  </div>');
			redirect("admin/visi");
		} else {
			redirect('admin');
		}
	}

	public function input_artikel()
	{
		$data['article'] = $this->db->get('tbl_article');
		// $data['kegiatan'] =  $this->admin_model->getKegiatan();
		// $data['kegiatan'] =  $this->admin_model->getKegiatan();
		// $data['kegiatan'] = $this->admin_model->kegiatanJoinTri();
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/template/header');
		$this->load->view('admin/blog_view', $data);
		$this->load->view('admin/template/footer');
	}

	public function artikel_delete()
	{

		$data['article'] = $this->db->get('tbl_article');

		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/template/header');
		$this->load->view('admin/blog_view', $data);
		$this->load->view('admin/template/footer');

		if ($this->session->userdata("role_id") == "1") {

			$id = $this->uri->segment(3);

			$this->db->delete('tbl_article', array('article_id' => $id));
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Data buletin berhasil dihapus!
			  </div>');
			redirect("admin/input_artikel");
		} else {
			redirect('admin');
		}
	}

	public function artikel_update()
	{

		$id = $this->uri->segment(3);
		if($id === null){
			redirect("admin/input_artikel");
		}else{
			$cek = $this->admin_model->getartikelbyid($id);
			if(!$cek){
				redirect("admin/input_artikel");
			}else{

				$data['article'] = $this->db->get('tbl_article');

				$data['article_ubah'] = $this->admin_model->getartikelbyid($id);
				$data['artikel_update'] = $this->db->get_where('tbl_article', array('article_id' => $id));
				$this->load->view('admin/template/sidebar', $data);
				$this->load->view('admin/template/header', $data);
				$this->load->view('admin/blog_edit', $data);
				$this->load->view('admin/template/footer');
			}
			
		}
	}

	public function simpanubahartikel()
	{
		$name = time();
		$id = $this->uri->segment(3);

        $config['upload_path']          = './foto/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['encrypt_name']			= TRUE;
		$this->load->library('upload', $config);

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('berkas'))
        {
            $data = [
            	'article_title' => $this->input->post('title'),
            	'article_content' => $this->input->post('content')
            ];

            $this->admin_model->updateartikel($data, $id);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Artikel berhasil diubah
            </div>');
            redirect("admin/input_artikel");
        }
        else
        {
        	$data = $this->admin_model->getartikelbyid($id);
			$path = './uploads/' . $data['nama_berkas'];
			// unlink($path);

            $data = [
            	'article_title' => $this->input->post('title'),
            	'nama_berkas' => $this->upload->data("file_name"),
            	'article_content' => $this->input->post('content'),
            	'tipe_berkas' => $this->upload->data('file_ext'),
            	'ukuran_berkas' => $this->upload->data('file_size')
            ];

            $this->admin_model->updateartikel($data, $id);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Profil berhasil diubah
            </div>');
            redirect("admin/input_artikel");
        }
	}

	function publish(){

		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['encrypt_name']			= TRUE;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('berkas'))
		{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('admin/template/sidebar');
				$this->load->view('admin/template/header');
				$this->load->view('admin/blog_view', $error);
				$this->load->view('admin/template/footer');
		}
		else
		{
			$title = $this->input->post('title',TRUE);
			$nama_berkas = $this->upload->data("file_name");
			$content = $this->input->post('content',TRUE);
			$tipe_berkas = $this->upload->data('file_ext');
			$ukuran_berkas = $this->upload->data('file_size');
			$this->admin_model->publish_article($title, $nama_berkas, $content, $tipe_berkas, $ukuran_berkas);

	        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					Artikel Berhasil Terinput!
				  </div>');

	        redirect('admin/input_artikel');
		}
        
    }


    public function input_dokumen()
	{

		$data['berkas'] = $this->db->get('tb_berkas');

		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/template/header');
		$this->load->view('admin/form_upload', $data);
		$this->load->view('admin/template/footer');
	}

	function upload_buletin()
	{

		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 7000;
		$config['max_width']            = 7000;
		$config['max_height']           = 7000;
		$config['encrypt_name']			= TRUE;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('berkas'))
		{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('admin/template/sidebar');
				$this->load->view('admin/template/header');
				$this->load->view('admin/form_upload', $error);
				$this->load->view('admin/template/footer');
		}
		else
		{
			$data['nama_berkas'] = $this->upload->data("file_name");
			$data['keterangan_berkas'] = $this->input->post('keterangan_berkas');
			$data['tipe_berkas'] = $this->upload->data('file_ext');
			$data['ukuran_berkas'] = $this->upload->data('file_size');
			$this->db->insert('tb_berkas',$data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Data buletin berhasil diinput!
			  </div>');
			redirect('admin/input_dokumen');
		}
	}

	public function buletin_update()
	{

		$id = $this->uri->segment(3);
		if($id === null){
			redirect("admin/input_dokumen");
		}else{
			$cek = $this->admin_model->getbuletinbyid($id);
			if(!$cek){
				redirect("admin/input_dokumen");
			}else{

				$data['berkas'] = $this->db->get('tb_berkas');

				$data['buletin_ubah'] = $this->admin_model->getbuletinbyid($id);
				$data['buletin_update'] = $this->db->get_where('tb_berkas', array('kd_berkas' => $id));
				$data['judul'] = 'Struktur Organisasi';
				$this->load->view('admin/template/sidebar', $data);
				$this->load->view('admin/template/header', $data);
				$this->load->view('admin/form_edit', $data);
				$this->load->view('admin/template/footer');
			}
			
		}
	}

	public function simpanubahbuletin()
	{
		$id = $this->uri->segment(3);

        $config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['encrypt_name']			= TRUE;
		$this->load->library('upload', $config);

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('berkas'))
        {

            $data = [
            	'keterangan_berkas' => $this->input->post('keterangan_berkas')
            ];

            $this->db->update("tb_berkas", $data, array('kd_berkas' => $id));
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Buletin berhasil diubah
            </div>');
            redirect("admin/input_dokumen");
        }
        else
        {

        	$data = $this->admin_model->getbuletinbyid($id);
			$path = './uploads/' . $data['nama_berkas'];
			// unlink($path);

            $data = [
            	'nama_berkas' => $this->upload->data('file_name'),
            	'keterangan_berkas' => $this->input->post('keterangan_berkas'),
            	'tipe_berkas' => $this->upload->data('file_ext'),
            	'ukuran_berkas' => $this->upload->data('file_size')
            ];

            $this->db->update("tb_berkas", $data, array('kd_berkas' => $id));
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Buletin berhasil diubah
            </div>');
            redirect("admin/input_dokumen");
        }
	}

	public function buletin_delete()
	{

		$data['berkas'] = $this->db->get('tb_berkas');

		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/template/header');
		$this->load->view('admin/form_upload', $data);
		$this->load->view('admin/template/footer');

		if ($this->session->userdata("role_id") == "1") {

			$id = $this->uri->segment(3);

			$this->db->delete('tb_berkas', array('kd_berkas' => $id));
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Data buletin berhasil dihapus!
			  </div>');
			redirect("admin/input_dokumen");
		} else {
			redirect('admin');
		}
	}

	public function input_profil()
	{
		$data['profil'] = $this->db->get('tb_profil');

		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/template/header');
		$this->load->view('admin/profil_upload', $data);
		$this->load->view('admin/template/footer');
	}

	function publish_profil(){

		$config['upload_path']          = './foto/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['encrypt_name']			= TRUE;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('berkas'))
		{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('admin/template/sidebar');
				$this->load->view('admin/template/header');
				$this->load->view('admin/profil_upload', $error);
				$this->load->view('admin/template/footer');
		}
		else
		{
			$nama = $this->input->post('nama',TRUE);
			$jabatan = $this->input->post('jabatan',TRUE);
			$nama_berkas = $this->upload->data("file_name");
			$tipe_berkas = $this->upload->data('file_ext');
			$ukuran_berkas = $this->upload->data('file_size');
			$this->admin_model->publish_profil($nama, $jabatan, $nama_berkas, $tipe_berkas, $ukuran_berkas);

	        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					Data profil Berhasil Terinput!
				  </div>');

	        redirect('admin/input_profil');
		}
        
    }

    public function profil_delete()
	{

		$data['profil'] = $this->db->get('tb_profil');

		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/template/header');
		$this->load->view('admin/profil_upload', $data);
		$this->load->view('admin/template/footer');

		if ($this->session->userdata("role_id") == "1") {

			$id = $this->uri->segment(3);

			$this->db->delete('tb_profil', array('id' => $id));

			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Data profil berhasil dihapus!
			  </div>');
			redirect("admin/input_profil");
		} else {
			redirect('admin');
		}
	}

	public function profil_update()
	{

		$id = $this->uri->segment(3);
		if($id === null){
			redirect("admin/input_profil");
		}else{
			$cek = $this->admin_model->getprofilbyid($id);
			if(!$cek){
				redirect("admin/input_profil");
			}else{

				$data['profil'] = $this->db->get('tb_profil');

				$data['profil_ubah'] = $this->admin_model->getprofilbyid($id);
				$data['judul'] = 'Struktur Organisasi';
				$this->load->view('admin/template/sidebar', $data);
				$this->load->view('admin/template/header', $data);
				$this->load->view('admin/profil_edit', $data);
				$this->load->view('admin/template/footer');
			}
			
		}
	}

	public function simpanubahprofil()
	{
		$name = time();
		$id = $this->uri->segment(3);

        $config['upload_path']          = './foto/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['encrypt_name']			= TRUE;
		$this->load->library('upload', $config);

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('berkas'))
        {
            $data = [
            	'nama' => $this->input->post('nama'),
            	'jabatan' => $this->input->post('jabatan')
            ];

            $this->admin_model->updateprofil($data, $id);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Profil berhasil diubah
            </div>');
            redirect("admin/input_profil");
        }
        else
        {
        	$data = $this->admin_model->getprofilbyid($id);
			$path = './foto/' . $data['nama_berkas'];
			// unlink($path);

            $data = [
            	'nama' => $this->input->post('nama'),
            	'jabatan' => $this->input->post('jabatan'),
            	'nama_berkas' => $this->upload->data("file_name"),
            	'tipe_berkas' => $this->upload->data('file_ext'),
            	'ukuran_berkas' => $this->upload->data('file_size')
            ];

            $this->admin_model->updateprofil($data, $id);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Profil berhasil diubah
            </div>');
            redirect("admin/input_profil");
        }
	}

	public function tampil_saran()
	{
		$data['saran'] = $this->db->get('tbl_saran');

		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/template/header');
		$this->load->view('admin/tampil_saran', $data);
		$this->load->view('admin/template/footer');
	}
	
}