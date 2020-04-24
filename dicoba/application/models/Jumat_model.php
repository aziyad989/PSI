<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jumat_model extends CI_Model
{
    private $_table = "personil";

    // public $ID_PERAN;
    public $NAMA_LENGKAP;

    public function rules()
    {
        return [
            ['field' => 'NAMA_LENGKAP',
            'label' => 'NAMA_LENGKAP',
            'rules' => 'required'],
            ['field' => 'TANGGAL_LAHIR',
            'label' => 'TANGGAL_LAHIR',
            'rules' => 'required'],
            ['field' => 'ALAMAT',
            'label' => 'ALAMAT',
            'rules' => 'required'],
            ['field' => 'NO_TELP',
            'label' => 'NO_TELP',
            'rules' => 'required'],
        ];
    }

    
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($ID_PERSONIL)
    {
        return $this->db->get_where($this->_table, ["ID_PERSONIL" => $ID_PERSONIL])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->NAMA_LENGKAP = $post["NAMA_LENGKAP"];
        $this->TANGGAL_LAHIR = $post["TANGGAL_LAHIR"];
        $this->ALAMAT = $post["ALAMAT"];
        $this->NO_TELP = $post["NO_TELP"];
        $this->db->insert($this->_table, $this);
    }
}