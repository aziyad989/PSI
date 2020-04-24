<?php
class C_master extends CI_Controller{

	public function __construct(){
		parent::__construct();
        $this->load->model('Peran_model');
        $this->load->library('form_validation');

	}

        public function index(){
            //jika sebagai admin
                $this->load->model('Peran_model');
                // $peran = $this->Peran_model->getAll();
                $data = array(
                        // 'peran'    => $peran, 
                        'content'  => 'admin/form_peran'

                    );
                $this->load->view('layout', $data);
        }


        public function tampilPeran() {
            $this->load->model('Peran_model');
            $peran = $this->Peran_model->get_peran()->result();
            $data = array(
                'peran' => $peran,
                'content'   => 'admin/t_peran',
            );
            $this->load->view('layout', $data);
        }

        public function simpan()
        {             
            $peran = $this->Peran_model;
            $validation = $this->form_validation;
            $validation->set_rules($peran->rules());

            if ($validation->run()) {
                $peran->save();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }

            // $data = array(
            //             // 'peran'    => $peran, 
            //             'content'  => 'admin/form_peran'

            //         );
            //     $this->load->view('layout', $data);
            redirect("tampilPeran");
        }

       

}