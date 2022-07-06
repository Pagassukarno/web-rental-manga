<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Product extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->model('product_model','product',true);
        $data['product_list'] = $this->product->get_all();
        $data['product_listdc'] = $this->product->get_alldc();
        $data['product_listjk'] = $this->product->get_alljk();
        $data['product_listop'] = $this->product->get_allop();
        $this->load->view('product', $data);
    }
 }