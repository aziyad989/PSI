<?php
class C_jumat extends CI_Controller{

	public function __construct(){
		parent::__construct();
        $this->load->library('form_validation');

	}

        public function index(){
            //jika sebagai admin
                $this->load->model('Peran_model');
                $peran = $this->Peran_model->getAll();
                $data = array(
                        'peran'    => $peran, 
                        'content'  => 'admin/form_jumat'

                    );
                $this->load->view('layout', $data);
        }



	function tambahPersonil (){
		$this->load->view('admin/t_personil');
	}

        public function tampilPeran() {
            $this->load->library('form_validation');
            $this->load->model('Peran_model');
            $peran = $this->Peran_model->getAll()->result();
            $data = array(
                'peran' => $peran,
                // 'judul'     => 'Form Tambah Jabatan',
                // 'title'     => 'Input Jabatan',
                'content'   => 'admin/t_jumat',
            );
            $this->load->view('layout', $data);
        }

        public function simpan(){             
            $peran = $this->Peran_model;
            $validation = $this->form_validation;
            $validation->set_rules($peran->rules());

            if ($validation->run()) {
                $peran->save();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }

            // $data = array(
            //             // 'peran'    => $peran, 
            //             'content'  => 'admin/form_jumat'

            //         );
            //     $this->load->view('layout', $data);
            redirect("admin");
        }

}