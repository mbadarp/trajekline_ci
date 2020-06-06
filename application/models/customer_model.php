<?php
class customer_model extends CI_Model{
    function getAll(){
        $this->db->select('*');
        $this->db->from('login_user');
        $query = $this->db->get();
        return $query;
    }
    function input_data($data,$table){
        $this->db->insert($table,$data);
        
    }
    function getProfil(){
        $this->db->select('*');
        $this->db->from('login_user');
        $this->db->where('login_user.id',$username);
        $query = $this->db->get();
        return $query;
    }
    function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }
    function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    function login($user,$pass,$table){
        $this->db->select('*');
        $this->db->from('login_user');
        $this->db->where('username',$user);
        $this->db->where('password',$pass);
        $query = $this->db->get();
        return $query;
    }
    function isNotLogin(){
        return $this->session->userdata('session_customer') === null;
    }
}
?>