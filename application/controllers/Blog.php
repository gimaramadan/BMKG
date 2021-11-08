<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Blog extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
 
    function index(){
        // memanggil sebuah bernama blog_view 
        $this->load->view('admin/blog_view');
    }
} 