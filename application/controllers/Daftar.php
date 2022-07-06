<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Daftar extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}
 
	public function index()
	{
		$this->load->view('daftar');
	}

	public function proses()
	{
		
		$this->form_validation->set_rules('email', 'email','trim|required|min_length[1]|max_length[255]|is_unique[table_user.email]');
		$this->form_validation->set_rules('nama_user', 'nama_user','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('alamat', 'alamat','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('no_hp', 'no_hp','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');

		if ($this->form_validation->run()==true)
	   	{
			$email = $this->input->post('email');
			$nama_user = $this->input->post('nama_user');
			$alamat = $this->input->post('alamat');
			$no_hp = $this->input->post('no_hp');
			$password = $this->input->post('password');
			$this->auth->register ($email, $nama_user, $alamat, $no_hp,$password);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('login');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('daftar');
		}
	}

}