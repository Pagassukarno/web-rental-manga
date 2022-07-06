<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller { 

	
	function __construct(){
		parent::__construct();		
		$this->load->model('account_model');
        $this->load->helper('url');
	}
	public function index()
	{	
		$tabel = 'table_user';  
		$where = ''; 
		$limit = '0'; 
		$offset = '3'; 
		$data['isi'] = $this->account_model->tampil($tabel, $limit, $offset,$where);
                $data['val']=$this->input->get('msg');
		$this->load->view('account',$data);
	}		
}