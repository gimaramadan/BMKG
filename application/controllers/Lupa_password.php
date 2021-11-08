<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
   
 class Lupa_password extends CI_Controller {  
   
   
     public function index()  
     {  
         
          $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

          $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[password_conf]', [
              'matches' => 'Password tidak sama!',
              'min_length' => 'Password terlalu pendek'
          ]);
          $this->form_validation->set_rules('password_conf', 'Password', 'required|trim|matches[password]');

          if ($this->form_validation->run() == FALSE) {
            $this->load->view('account/v_lupa_password');
          }
          else {
            $this->_forgotpassword();
          }  
         
     }  

     private function _forgotpassword()
      {

        $email = $this->input->post("email", true);

        $password = $this->input->post('password', true);
        $password = password_hash($password, PASSWORD_DEFAULT);

        $result = $this->db->get_where('tbuser', ['email' => $email])->row_array();

        if ($result) { 
          $this->db->update('tbuser', ['password' => $password], ['email' => $email]);

          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Password Berhasil Diganti!
            </div>');

          redirect('login');

        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
          Ganti Password Gagal!
          </div>');
          redirect('lupa_password/index');
        }
      }
   
     public function reset_password()  
     {  
       $token = $this->base64url_decode($this->uri->segment(4));           
       $cleanToken = $this->security->xss_clean($token);  
         
       $user_info = $this->m_account->isTokenValid($cleanToken); //either false or array();          
         
       if(!$user_info){  
         $this->session->set_flashdata('sukses', 'Token tidak valid atau kadaluarsa');  
         redirect(site_url('login'),'refresh');   
       }    
   
       $data = array(  
         'title'=> 'Halaman Reset Password | Tutorial reset password CodeIgniter @ https://recodeku.blogspot.com',  
         'nama'=> $user_info->nama,   
         'email'=>$user_info->email,   
         'token'=>$this->base64url_encode($token)  
       );  
         
       $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');  
       $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');         
         
       if ($this->form_validation->run() == FALSE) {    
         $this->load->view('account/v_reset_password', $data);  
       }else{  
                           
         $post = $this->input->post(NULL, TRUE);          
         $cleanPost = $this->security->xss_clean($post);          
         $hashed = md5($cleanPost['password']);          
         $cleanPost['password'] = $hashed;  
         $cleanPost['id_user'] = $user_info->id_user;  
         unset($cleanPost['passconf']);          
         if(!$this->m_account->updatePassword($cleanPost)){  
           $this->session->set_flashdata('sukses', 'Update password gagal.');  
         }else{  
           $this->session->set_flashdata('sukses', 'Password anda sudah  
             diperbaharui. Silakan login.');  
         }  
         redirect(site_url('login'),'refresh');         
       }  
     }  
       
   public function base64url_encode($data) {   
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');   
   }   
   
   public function base64url_decode($data) {   
    return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));   
   }    
 }  