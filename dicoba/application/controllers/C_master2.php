<?php
class C_master2 extends CI_Controller{

	public function __construct(){
		parent::__construct();
        $this->load->library('form_validation');
		$this->load->model('Personil_model');
        $this->load->model('Peran_model');
	}

	        public function index(){
            //jika sebagai admin
                // $data['peran']=$this->Peran_model->get_peran();
                $this->load->model('Peran_model');
                $peran = $this->Peran_model->get_peran()->result();
                // $personil = $this->Personil_model->getAll();
                $data = array(
                        'peran'    => $peran, 
                        'content'  => 'admin/form_personil'

                    );
                $this->load->view('layout', $data);
        }

        public function tampilPersonil() {
            $this->load->model('Personil_model');

            $personil = $this->Personil_model->get_personil()->result();
            $data = array(
                'personil' => $personil,
                'content'   => 'admin/t_personil',
            );
            $this->load->view('layout', $data);
        }




            public function simpan(){ 
                      
            $personil = $this->Personil_model;
            $validation = $this->form_validation;
            $validation->set_rules($personil->rules());

            if ($validation->run()) {
                $personil->save();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }

            // $data = array(
            //             // 'peran'    => $peran, 
            //             'content'  => 'admin/form_peran'

            //         );
            //     $this->load->view('layout', $data);
            redirect("tampilPersonil");
        }
    }