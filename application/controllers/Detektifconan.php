<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Detektifconan extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->model('product_model','detektifconan',true);
             $data['product_listdc'] = $this->detektifconan->get_alldc();
        $this->load->view('detektifconan', $data);
    }
 }