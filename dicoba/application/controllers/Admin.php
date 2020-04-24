<?php
class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Peran_model');

	}

	function index(){
		// if(!$this->session->userdata('akses','1')){
		// 	exit(redirect('login'));
		// }
		// else{
		// 	exit(redirect('dashboard'));
		// }
        $this->load->view('header');
        $this->load->view('admin/dashboard');
        $this->load->view('footer');
	}




	public function pageDashboard()
    {
    	if(!$this->session->userdata('akses','1')){
    		$this->session->set_flashdata('login dlu wah');
			exit(redirect('login'));
		}
		else{
        $this->load->view('head');
        $this->load->view('admin/dashboard');
        $this->load->view('footer');
		}
    }

    public function add_peran()
    {
        $NAMA_PERAN = $this->Peran_model;
        $validation = $this->form_validation;
        $validation->set_rules($NAMA_PERAN->rules());

        if ($validation->run()) {
            $NAMA_PERAN->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view('head');
        $this->load->view('admin/navbar');
        $this->load->view('admin/form_peran');
        $this->load->view('footer');
    }



    public function edit_peran($ID_PERAN = null)
    {
        if (!isset($ID_PERAN)) redirect('admin/form_peran');
       
        $NAMA_PERAN = $this->Peran_model;
        $validation = $this->form_validation;
        $validation->set_rules($NAMA_PERAN->rules());

        if ($validation->run()) {
            $NAMA_PERAN->update();
            $this->session->set_flashdata('success', 'Data Baru Berhasil disimpan');
        }

        $data["NAMA_PERAN"] = $NAMA_PERAN->getById($ID_PERAN);
        if (!$data["NAMA_PERAN"]) show_404();
        
        $this->load->view('head');
        $this->load->view('navbar');
        $this->load->view('admin/form_peran', $data);
        $this->load->view('footer');
    }

    public function delete_peran($ID_PERAN=null)
    {
        if (!isset($ID_PERAN)) show_404();
        
        if ($this->Peran_model->delete($ID_PERAN)) {
            redirect(site_url('admin/form_peran'));
        }
    }

}
