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
    function getUser($username){
        $user = $this->db->get_where('login_user', ['username' => $username])->row_array();

        return $user;
        // $results = array();
        // $this->db->select("*");
        // $this->db->from('login_user');
        // $this->db->where('username', $this->session->userdata('username'));
        // $query = $this->db->get();

        // if($query->num_rows() > 0) {
        //     $results = $query->result();
        // }
        // return $results;
        // $this->db->select('*');
        // $this->db->from('login_user');
        // $this->db->where('username',$this->session->userdata('username'));
        // $query = $this->db->get();
        // return $query;
    }
   function getProfil(){
       
        $this->db->select("*");
        $this->db->from('login_user');
        $this->db->where('login_user.username', $this->session->userdata('session_customer'));
        $query = $this->db->get()->result_array();
        // $income = $this->db->query($query)->result_array();

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