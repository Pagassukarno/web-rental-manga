<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function proses()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		if($this->auth->login_user($email,$password))
		{
			redirect('home');
		}
		else
		{
			$this->session->set_flashdata('error','Email & Password salah');
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('nama_user');
		$this->session->unset_userdata('is_login');
		redirect('login');
	}

	

}