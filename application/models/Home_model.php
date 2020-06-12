<?php
class home_model extends CI_Model{
    function getAll(){
        $this->db->select('*');
        $this->db->from('paket_tour');
        $query = $this->db->get();
        return $query;
    }
    function input_data($data,$table){
        $this->db->insert($table,$data);
        
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
    function get_detail($where,$table){
        return $this->db->get_where($table,$where);
            // $this->db->select('*');
            // $this->db->from('paket_tour');
            // $this->db->where('paket_tour.id_paket');
            // return $this->db->get()->result();
       }
}
?>