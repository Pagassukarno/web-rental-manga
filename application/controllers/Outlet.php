<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outlet extends CI_Controller { 

	
	function __construct(){
		parent::__construct();		
		$this->load->model('outlet_model');
        $this->load->helper('url');
	}
	public function index()
	{	
		$tabel = 'table_outlet';  
		$where = ''; 
		$limit = '0'; 
		$offset = '3'; 
		$data['isi'] = $this->outlet_model->tampil($tabel, $limit, $offset,$where);
                $data['val']=$this->input->get('msg');
		$this->load->view('outlet',$data);
	}		
}