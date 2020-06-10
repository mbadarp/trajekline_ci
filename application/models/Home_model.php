<?php
class home_model extends CI_Model{
    function getAll(){
        $this->db->select('*');
        $this->db->from('paket_tour');
        $query = $this->db->get();
        return $query;
    }
   function get_detail($where,$table){
    return $this->db->get_where($table,$where);
        // $this->db->select('*');
        // $this->db->from('paket_tour');
        // $this->db->where('paket_tour.id_paket');
        // return $this->db->get()->result();
   }
   function edit_data($where,$table){
    return $this->db->get_where($table,$where);
}

}
?>