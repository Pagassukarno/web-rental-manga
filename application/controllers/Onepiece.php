<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Onepiece extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->model('product_model','onepiece',true);
             $data['product_listop'] = $this->onepiece->get_allop();
        $this->load->view('onepiece', $data);
    }
 }