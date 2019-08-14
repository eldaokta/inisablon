<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Tbmuser_model extends CI_Model
{

    public function create($data) {
        return $this->db->insert('tbmuser', $data);}

    public function get_user_by_id($iduser) {
        $this->db->select('*');
        $this->db->from('tbmuser');
        $this->db->join('tbmrole', 'tbmrole.idrole = tbmuser.role');
        $this->db->where('iduser', $iduser);
        $user = $this->db->get();
        return $user->row();
    }

    public function update($data, $iduser) {
        $this->db->where('iduser', $iduser);
        return $this->db->update('tbmuser', $data);}

    public function delete($iduser) {
        $this->db->where('iduser', $iduser);
        return $this->db->delete('tbmuser');}

    public function get_join_user() {
        $this->db->select('*');
        $this->db->from('tbmuser');
        $this->db->join('tbmrole', 'tbmrole.idrole = tbmuser.role');
        $user = $this->db->get()->result();
        return $user;
    }

    public function getrole() {
        $query = $this->db->get('tbmrole');
        return $query->result();
    }

    public function getuser() {
        $query = $this->db->get('tbmuser');
        return $query->result();
    }

    public function cari($parm){
        $this->db->select('*');
        $this->db->from('tbmuser');
        $this->db->join('tbmrole', 'tbmrole.idrole = tbmuser.role');
        $this->db->like('name', $parm, 'both');
        $this->db->or_like('username', $parm, 'both');
        $this->db->or_like('rolename', $parm, 'both');
        return $this->db->get()->result();
    }

}