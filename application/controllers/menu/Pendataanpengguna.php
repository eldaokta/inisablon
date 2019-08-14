<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pendataanpengguna extends CI_Controller {

    var $CI = NULL;
    public function __construct()
    {parent::__construct();
    $this->load->library('form_validation');
    $this->CI =& get_instance();
    $this->load->model('tbmuser_model', 'tbmusermodel');}

    public function index() {
        $data=array('list_user' => $this->tbmusermodel->get_join_user(),
                    'title'=>'Data Pengguna',
                    'isi'  =>'menu/pendataanpengguna/index'
                        );
        $this->load->view($this->get_wrapper(),$data);   
    }

    public function cari() {
        $this->load->model('tbmuser_model');
        $data=array('list_user' => $this->tbmuser_model->cari($this->input->post('cari')),
                    'title'=>'cari pengguna',
                    'isi'  =>'menu/pendataanpengguna/index'
                );
        $this->load->view($this->get_wrapper(),$data);   
    }

    public function create() {
        $data=array('role' => $this->tbmusermodel->getrole(),
                    'title'=>'Tambah Data Pengguna',
                    'isi'  =>'menu/pendataanpengguna/create'
                        );
        $this->load->view($this->get_wrapper(),$data);   
        }

    public function checknik($nik) {
        $this->db->where('nik', $nik);
        $query = $this->db->get('tbmuser');
        $count_row = $query->num_rows();

        if ($count_row > 0) {
            return FALSE;
        } else {
            return TRUE;
        }
        }

    public function checkusername($username) {
        $this->db->where('username', $username);
        $query = $this->db->get('tbmuser');
        $count_row = $query->num_rows();

        if ($count_row > 0) {
            return FALSE;
        } else {
            return TRUE;
        }
        }


    public function store() {
        $data = array(
            'name' => $this->input->post('name'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'passwordreal' => $this->input->post('password'),
            'role' => $this->input->post('role'));
            
            if ($this->tbmusermodel->create($data)) {redirect('menu/pendataanpengguna');}
            else {redirect('menu/pendataanpengguna/create');}
        }

    public function edit($iduser) {
        $data=array('role' => $this->tbmusermodel->getrole(),
                    'user' => $this->tbmusermodel->get_user_by_id($iduser),
                    'title'=>'Edit Pengguna',
                    'isi'  =>'menu/pendataanpengguna/edit'
                        );
        $this->load->view($this->get_wrapper(),$data);   
        }

    public function update(){
        $iduser = $this->input->post('iduser'); 
        $data = array(
                'name' => $this->input->post('name'),
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'passwordreal' => $this->input->post('password'),
                'role' => $this->input->post('role'));
        
        if ($this->tbmusermodel->update($data, $iduser)) {redirect('menu/pendataanpengguna');}
        else {redirect('menu/pendataanpengguna/update/' . $iduser);}
    }

    public function delete($id) {
        $data=array('user' => $this->tbmusermodel->get_user_by_id($id),
                    'title'=>'Hapus Pengguna',
                    'isi'  =>'menu/pendataanpengguna/delete'
                        );
        $this->load->view($this->get_wrapper(),$data);   
        }

    public function destroy() {$iduser = $this->input->post('iduser');

        if ($this->tbmusermodel->delete($iduser)) {redirect('menu/pendataanpengguna');}
        else {redirect('menu/pendataanpengguna/delete/' . $iduser);}
    }
    
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