<?php
class M_buletin extends CI_Model
{
    

    public function updatebuletin($data, $id)
    {
        
        return $this->db->update('tb_berkas', $data, ['kd_berkas' => $id]);
    }


}
