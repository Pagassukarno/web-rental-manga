<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Jujutsukaisen extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->model('product_model','jujutsukaisen',true);
             $data['product_listjk'] = $this->jujutsukaisen->get_alljk();
        $this->load->view('jujutsukaisen', $data);
    }
 }