<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Shop extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->model('product_model','shop',true);
        $data['product_list'] = $this->shop->get_all();
        $this->load->view('shop', $data);
    }
 }