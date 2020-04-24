<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Peran_model extends CI_Model
{
    private $_table = "peran";

    // public $ID_PERAN;
    public $NAMA_PERAN;

    public function rules()
    {
        return [
            ['field' => 'NAMA_PERAN',
            'label' => 'NAMA_PERAN',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($ID_PERAN)
    {
        return $this->db->get_where($this->_table, ["ID_PERAN" => $ID_PERAN])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->NAMA_PERAN = $post["NAMA_PERAN"];
        $this->db->insert($this->_table, $this);
    }

 //    public function update()
 //    {
 //        $post = $this->input->post();
 //        $this->ID_PERAN = $post["ID_PERAN"];
 //        $this->NAMA_PERAN = $post["NAMA_PERAN"];
 //        $this->db->update($this->_table, $this, array('ID_PERAN' => $post['ID_PERAN']));
 //    }

 //    public function delete($ID_PERAN)
 //    {
 //        return $this->db->delete($this->_table, array("ID_PERAN" => $ID_PERAN));
	// }

    // public function get_peran()
    // {
    //     $this->db->from('peran');
    //     $query = $this->db->get();
    //     return $query->result();
    // }

    function get_peran(){
        $query = $this->db->get('peran');
        return $query;  
    }
    // function get_peran()
    // {
    //     $query = $this->db->query('SELECT * FROM peran');
    //     return $this->db->query($query)->result();
    // }


}