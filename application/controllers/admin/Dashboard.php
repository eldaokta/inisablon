<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	var $CI = NULL;
    public function __construct()
    {parent::__construct();
    $this->CI =& get_instance();}

	public function index() {
		$data=array('title'=>'Dashboard',
					'isi'  =>'admin/dashboard'
						);
		$this->load->view('admin/wrapper',$data);	
	}
}