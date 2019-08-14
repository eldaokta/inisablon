<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Masterproduk extends CI_Controller {
	public function index() {
		$this->load->model('mstproduct_model');
		$data=array('title'=>'Semua order',
					'isi'  =>'menu/masterproduk/index',
					'list_product'=>$this->mstproduct_model->get_all()
				);
		$this->load->view($this->get_wrapper(),$data);	
	}

	public function cari() {
		$this->load->model('mstproduct_model');
        $this->load->model('tbmuser_model', 'tbmusermodel');
		$data=array('list_user' => $this->tbmusermodel->getuser(),
                    'list_status' => $this->mstproduct_model->getstatus(),
                    'list_product' => $this->mstproduct_model->cari($this->input->post('cari')),
					'title'=>'cari produk',
					'isi'  =>'menu/masterproduk/index'
				);
		$this->load->view($this->get_wrapper(),$data);	
	}

	public function create() {
        $this->load->model('tbmuser_model', 'tbmusermodel');
        $this->load->model('mstproduct_model');
		$data=array('list_user' => $this->tbmusermodel->getuser(),
                    'list_status' => $this->mstproduct_model->getstatus(),
                    'title'=>'Tambah Data Produk',
					'isi'  =>'menu/masterproduk/create'
						);
		$this->load->view($this->get_wrapper(),$data);	
		}

	public function store() {
		$this->load->model('mstproduct_model');
		$data = array(
        'date' =>$this->input->post('date'),
        'customer' =>$this->input->post('customer'),
		'article' => $this->input->post('article'),
        'manual' =>$this->input->post('manual'),
        'dtg' =>$this->input->post('dtg'),
        'onlysablon' => $this->input->post('onlysablon'),
        'phone' =>$this->input->post('phone'),
        'email' =>$this->input->post('email'),
        'marketing' =>$this->input->post('marketing'),
        'status' =>$this->input->post('status'));
            
            if ($this->mstproduct_model->create($data)) {
            	redirect('menu/masterproduk');}
            else {
            	redirect('menu/masterproduk/create');}
        }

        public function edit($idorder) {
            $this->load->model('tbmuser_model', 'tbmusermodel');
        	$this->load->model('mstproduct_model');
            $data=array('list_user' => $this->tbmusermodel->getuser(),
                        'list_status' => $this->mstproduct_model->getstatus(),
                        'user' => $this->mstproduct_model->get_user_by_id($idorder),
                        'title'=>'Edit Pengguna',
                        'isi'  =>'menu/masterproduk/edit'
                        );
        $this->load->view($this->get_wrapper(),$data);   
        }

    	public function update(){
    	$this->load->model('mstproduct_model');
    	$idorder = $this->input->post('idorder');
        $data = array(
            'date' =>$this->input->post('date'),
            'customer' =>$this->input->post('customer'),
            'article' => $this->input->post('article'),
            'manual' =>$this->input->post('manual'),
            'dtg' =>$this->input->post('dtg'),
            'onlysablon' => $this->input->post('onlysablon'),
            'phone' =>$this->input->post('phone'),
            'email' =>$this->input->post('email'),
            'marketing' =>$this->input->post('marketing'),
            'status' =>$this->input->post('status'));

            if (
            	$this->mstproduct_model->update($data, $idorder)) {redirect('menu/masterproduk');}
            else {redirect('menu/masterproduk/update/' . $idorder);}
        }

     public function delete($idorder) {
     	$this->load->model('mstproduct_model');
		$data=array('user' => $this->mstproduct_model->get_user_by_id($idorder),
					'title'=>'Hapus Produk',
					'isi'  =>'menu/masterproduk/delete',
					'id' => $idorder
						);
		$this->load->view($this->get_wrapper(),$data);	
		}

		public function destroy() {
			$this->load->model('mstproduct_model');
			$idorder= $this->input->post('idorder');
        if (
        	$this->mstproduct_model->delete($idorder)) {redirect('menu/masterproduk');}
        else {
        	redirect('menu/masterproduk/delete/' . $idorder);}}
    
    // Ambil wrapper
    public function get_wrapper() {
        $role=$this->session->userdata('role');
        $wrapper;
        if($role==ADMIN)
            $wrapper='admin/wrapper';
        else if($role==EMPLOYEE)
            $wrapper='employee/wrapper';
        else if($role==MANAGER)
            $wrapper='manager/wrapper';
        return $wrapper;
    }

}