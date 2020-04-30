<?php
class request_model extends CI_Model{
    function getAll(){
        $this->db->select('*');
        $this->db->from('data_request');
        $query = $this->db->get();
        return $query;
    }
    function input_data($data,$table){
        $this->db->insert($table,$data);     
    }
   
}
?>