<?php
class detailPaket_model extends CI_Model{
    function getAll(){
        $this->db->select('*');
        $this->db->from('paket_tour');
        $query = $this->db->get();
        return $query;
    }
    function input_data($data,$table){
        $this->db->insert($table,$data);     
    }
    
}
?>