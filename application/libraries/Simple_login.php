<?php if(! defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan'); 

class Simple_login {
	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct() {
		$this->CI =& get_instance();
	}
	// Fungsi login
	public function login($username, $password) {
		$query = $this->CI->db->get_where('tbmuser',array('username'=>$username,'password' => md5($password)));
		if($query->num_rows() == 1) {
			$row 	= $this->CI->db->query('SELECT * FROM tbmuser where username = "'.$username.'"');
			$admin 	= $row->row();
			$id 	= $admin->id;
			$role	=  $admin->role;
			$this->CI->session->set_userdata('username', $username);
			$this->CI->session->set_userdata('id_login', uniqid(rand()));
			$this->CI->session->set_userdata('id', $id);
			$this->CI->session->set_userdata('role', $role);

			if($role == '1') {redirect(base_url('admin/dashboard'));}
			elseif($role == '2'){redirect(base_url('employee/dashboard'));}
			elseif($role =='3'){redirect(base_url('manager/dashboard'));}}

		else{
			$this->CI->session->set_flashdata('sukses','Username/Password Salah');
			redirect(base_url('welcome'));
		}
		return false;
	}
	// Proteksi halaman
	public function cek_login() {
		if($this->CI->session->userdata('username') == '') {
			$this->CI->session->set_flashdata('sukses','Anda Belum Login');
			redirect(base_url('welcome'));
		}
	}
	// Fungsi logout
	public function logout() {
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('id_login');
		$this->CI->session->unset_userdata('id');
		$this->CI->session->set_flashdata('sukses','Anda Berhasil Logout');
		redirect(base_url('welcome'));
	}
}