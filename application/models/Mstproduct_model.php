<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class mstproduct_model extends CI_Model {
    
    public function get_user_by_id($idorder) {
        $this->db->join('tbmuser', 'tbmuser.iduser = tmborder.marketing');
        $this->db->join('tbmstatus', 'tbmstatus.idstatus = tmborder.status');
        $this->db->where('idorder', $idorder);
        $this->db->order_by("date", "desc");
        $idorder = $this->db->get('tmborder');
        return $idorder->row();
    }

    public function create($data) {
        return $this->db->insert('tmborder', $data);}

    public function update($data, $idorder) {
        $this->db->where('idorder', $idorder);
        return $this->db->update('tmborder', $data);}

    public function delete($idorder) {
        $this->db->where('idorder', $idorder);
        return $this->db->delete('tmborder');}

    public function get_all(){
        $this->db->select('*');
        $this->db->from('tmborder');
        $this->db->join('tbmuser', 'tbmuser.iduser = tmborder.marketing');
        $this->db->join('tbmstatus', 'tbmstatus.idstatus = tmborder.status');
        $this->db->order_by("date", "desc");
        return $this->db->get()->result();
    }

    public function get_new(){
        $this->db->select('*');
        $this->db->from('tmborder');
        $this->db->join('tbmuser', 'tbmuser.iduser = tmborder.marketing');
        $this->db->join('tbmstatus', 'tbmstatus.idstatus = tmborder.status');
        $this->db->where('status', '1');
        $this->db->order_by("date", "desc");
        return $this->db->get()->result();
    }

    public function get_process(){
        $this->db->select('*');
        $this->db->from('tmborder');
        $this->db->join('tbmuser', 'tbmuser.iduser = tmborder.marketing');
        $this->db->join('tbmstatus', 'tbmstatus.idstatus = tmborder.status');
        $this->db->where('status', '2');
        $this->db->order_by("date", "desc");
        return $this->db->get()->result();
    }

    public function get_done(){
        $this->db->select('*');
        $this->db->from('tmborder');
        $this->db->join('tbmuser', 'tbmuser.iduser = tmborder.marketing');
        $this->db->join('tbmstatus', 'tbmstatus.idstatus = tmborder.status');
        $this->db->where('status', '3');
        $this->db->order_by("date", "desc");
        return $this->db->get()->result();
    }

    public function getstatus() {
        $query = $this->db->get('tbmstatus');
        return $query->result();
    }

    public function cari($parm){
        $this->db->select('*');
        $this->db->from('tmborder');
        $this->db->join('tbmuser', 'tbmuser.iduser = tmborder.marketing');
        $this->db->join('tbmstatus', 'tbmstatus.idstatus = tmborder.status');
        $this->db->where('status', '1');
        $this->db->or_like('customer', $parm, 'both');
        $this->db->or_like('phone', $parm, 'both');
        $this->db->or_like('article', $parm, 'both');
        $this->db->order_by("date", "desc");
        return $this->db->get()->result();
    }

    public function cari_new($parm){
        $this->db->select('*');
        $this->db->from('tmborder');
        $this->db->join('tbmuser', 'tbmuser.iduser = tmborder.marketing');
        $this->db->join('tbmstatus', 'tbmstatus.idstatus = tmborder.status');
        $this->db->where('status', '1');
        $this->db->like('customer', $parm);
        return $this->db->get()->result();
    }

    public function cari_process($parm){
        $this->db->select('*');
        $this->db->from('tmborder');
        $this->db->join('tbmuser', 'tbmuser.iduser = tmborder.marketing');
        $this->db->join('tbmstatus', 'tbmstatus.idstatus = tmborder.status');
        $this->db->where('status', '2');
        $this->db->like('customer', $parm);
        return $this->db->get()->result();
    }

    public function cari_done($parm){
        $this->db->select('*');
        $this->db->from('tmborder');
        $this->db->join('tbmuser', 'tbmuser.iduser = tmborder.marketing');
        $this->db->join('tbmstatus', 'tbmstatus.idstatus = tmborder.status');
        $this->db->where('status', '3');
        $this->db->like('customer', $parm);
        return $this->db->get()->result();
    }
}