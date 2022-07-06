<?php
class Cart_model extends CI_Model{
 
    function fetch_all(){
       $query = $this->db->get("table_manga");
       return $query->result();
    }
     
}
 