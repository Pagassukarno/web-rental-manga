<?php 
class Auth extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
	}

	function register($email, $nama_user, $alamat, $no_hp,$password)
	{
		$data_user = array(
			'email'=>$email,
            'nama_user'=>$nama_user,
            'alamat'=>$alamat,
            'no_hp'=>$no_hp,
			'password'=>password_hash($password,PASSWORD_DEFAULT)
		);
		$this->db->insert('table_user',$data_user);
	}

    function login_user($email,$password)
	{
        $query = $this->db->get_where('table_user',array('email'=>$email));
        if($query->num_rows() > 0)
        {
            $data_user = $query->row();
            if (password_verify($password, $data_user->password)) {
                $this->session->set_userdata('email',$email);
				$this->session->set_userdata('nama_user',$data_user->nama_user);
				$this->session->set_userdata('is_login',TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
	}
	
    function cek_login()
    {
        if(empty($this->session->userdata('is_login')))
        {
			redirect('login');
		}
    }
    
}
?>