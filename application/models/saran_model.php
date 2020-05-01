<?php
class saran_model extends CI_Model{
    function getAll(){
        $this->db->select('*');
        $this->db->from('tbl_saran');
        $query = $this->db->get();
        return $query;
    }
    function input_data($data,$table){
        $this->db->insert($table,$data);
        
    }
    
    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

}
?>