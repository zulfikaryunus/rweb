<?php 

class m_login extends CI_Model{
	
	public function cek_akun($email, $password){
		$this->db->select('*');
		$this->db->from('tb_admin');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		if($query = $this->db->get()){
			return $query->row_array();
		}else{
			return false;
		}
	}
}

?>
