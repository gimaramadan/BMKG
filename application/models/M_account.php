<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_account extends CI_Model
{

    function daftar($data)
    {
        $this->db->insert('tbuser', $data);
        return $this->db->affected_rows();
    }
}
