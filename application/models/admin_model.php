<?php
class Admin_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getdata($where)
    {
        $this->db->select('*');
        $this->db->from('tbuser');
        $this->db->where('email', $where);
        return $this->db->get();

        // Select * From user Join work On name.id_work = work.id Join salary On name.id_salary = salary.id
    }

    function KTP($id)
    {
        return $this->db->query("select * from tbregistrasi");
    }

    function visi()
    {
        return $this->db->query("select * from tbvisi_misi");
    }

    function DeleteVisi($id)
    {
        return $this->db->query("delete from tbvisi_misi where id_visi='$id' ")->row();
    }

    function EditVisi($id)
    {
        return $this->db->query("select * from tbvisi_misi where id_visi='$id' ");
    }

    function Kegiatan()
    {
        return $this->db->query("select * from tbl_article");
    }
    //Awal Kelas Nikah
    function Nikah()
    {
        return $this->db->query("select * from tbregistrasi where jenis_registr='Nikah'");
    }

    function DeleteNikah($id)
    {
        return $this->db->query("delete from tbregistrasi where id_regist='$id' ")->row();
    }

    function EditNikah($id)
    {
        return $this->db->query("select * from tbregistrasi where id_regist='$id' ");
    }

    function NikahId($id)
    {
        return $this->db->query("select * from tbregistrasi where idnikah='$id'")->row();
    }
    //Akhir Kelas Nikah

    public function getKegiatan()
    {
        return $this->db->get('tbl_article')->result_array();
    }


    public function getTri()
    {
        return $this->db->get('triwulan')->result_array();
    }
    //Akhir Kelas Nikah
    // public function kegiatanJoinTri()
    // {
    //     $this->db->select('*');
    //     $this->db->from('triwulan');
    //     $this->db->join('tbkegiatan', 'tbkegiatan.id_triwulan = triwulan.id');
    //     return $this->db->get()->result_array();
    // }

    function publish_article($title, $nama_berkas, $content, $tipe_berkas, $ukuran_berkas){
        $data  = array(
            'article_title'   => $title,
            'nama_berkas'   => $nama_berkas,
            'article_content' => $content,
            'tipe_berkas' => $tipe_berkas,
            'ukuran_berkas' => $ukuran_berkas
        );
        $this->db->insert('tbl_article', $data);
    }

    public function show_article($slug = FALSE,$lmt=0){

        if($slug === FALSE){

          $this->db->order_by('article_created_at','DESC');
          if($lmt>0)
          {
               $query = $this->db->get('tbl_article',$lmt);
          } else {
               $query = $this->db->get('tbl_article');   
          }
          return $query->result_array();
        }
    }

    function publish_profil($nama, $jabatan, $nama_berkas, $tipe_berkas, $ukuran_berkas){
        $data  = array(
            'nama'   => $nama,
            'jabatan' => $jabatan,
            'nama_berkas'   => $nama_berkas,
            'tipe_berkas' => $tipe_berkas,
            'ukuran_berkas' => $ukuran_berkas
        );
        $this->db->insert('tb_profil', $data);
    }

    public function getprofilbyid($id)
    {
        return $this->db->get_where('tb_profil', ['id' => $id])->row_array();
    }

    public function getprofil()
    {
        return $this->db->get('tb_profil')->result_array();
    }

    public function getbuletinbyid($id)
    {
        return $this->db->get_where('tb_berkas', ['kd_berkas' => $id])->row_array();
    }

    public function getbuletin()
    {
        return $this->db->get('tb_berkas')->result_array();
    }

    public function updateprofil($data, $id)
    {
        return $this->db->update('tb_profil', $data, ['id' => $id]);
    }

    public function artikeldesc()
    {
        $this->db->select('*');
        $this->db->from('tbl_article');
        $this->db->order_by('article_created_at','desc');

        return $this->db->get();
    }

    public function artikelnew()
    {
        $this->db->select('*');
        $this->db->from('tbl_article');
        $this->db->order_by('article_created_at','desc');
        $this->db->limit(5);

        return $this->db->get();
    }

    public function getartikelbyid($id)
    {
        return $this->db->get_where('tbl_article', ['article_id' => $id])->row_array();
    }

    public function updateartikel($data, $id)
    {
        return $this->db->update('tbl_article', $data, ['article_id' => $id]);
    }

}
