<?php 
class Account_model extends CI_Model{ 
	function tampil($tabel, $limit, $offset, $where){ 
		
		if ($where != '' ){ 
                        
			$sql = $this->db->get_where($tabel, $where); 
		}else
		{
                      
			$sql = $this->db->get($tabel, $limit, $offset);
		}
		if (($limit != '') or ($offset != '')) 
		{
                       
			$this->db->limit($limit, $offset);
		}
                
		return $sql->result();
	}
}