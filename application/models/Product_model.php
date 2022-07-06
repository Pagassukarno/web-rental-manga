<?php
 class Product_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function get_all($limit = NULL, $offset = Null) {
        $query = $this->db->get('table_manga', $limit, $offset);
        return $query->result();
    }
    function get_alldc($limit = 5, $offset = Null) {
        $query = $this->db->get('table_manga', $limit, $offset);
        return $query->result();
    }
    function get_alljk($limit = 5, $offset = 5) {
        $query = $this->db->get('table_manga', $limit, $offset);
        return $query->result();
    }
    function get_allop($limit = 5, $offset = 10) {
        $query = $this->db->get('table_manga', $limit, $offset);
        return $query->result();
    }

    function get($id) {
                $query = $this->db->get_where("table_manga", array("id_manga"=>$id));
        return $query->row();
    }
 }
