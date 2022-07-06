<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


 class Cart extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('product_model','product',true);
        $this->load->library('cart');
    }

    function add($id) {
        $product = $this->product->get($id);

        $data = array(
            'id'      => $product->id_manga,
            'qty'     => 1,
            'price'   => $product->harga_sewa,

            'name'    => $product->nama_manga,
            
        );

        $this->cart->insert($data);
        redirect('cart');
    }

    function update()
    {
        $this->cart->update($_POST);
        redirect('cart');
    }

    function index() {
        $data['cart_list'] = $this->cart->contents();
        $this->load->view('cart', $data);
    }

 }
 ?>