<?php
class M_prospek extends CI_Model{

	public function insert($data)
	{
		return $this->db->insert('tbl_prospek', $data);
	}

	public function get()
	{
		return $this->db->get('tbl_prospek')->result_array();
	}

	public function getbyid($id)
	{
		return $this->db->get_where('tbl_prospek', ['id' => $id])->row_array();
	}

	public function update($data, $id)
	{
		return $this->db->update('tbl_prospek', $data, ['id' => $id]);
	}

	public function delete($id)
	{
		return $this->db->delete('tbl_prospek', ['id' => $id]);
	}

	public function prospekdesc()
    {
        $this->db->select('*');
        $this->db->from('tbl_prospek');
        $this->db->order_by('file','desc');
        $this->db->limit(1);

        return $this->db->get();
    }
}