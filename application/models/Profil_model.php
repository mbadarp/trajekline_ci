<?php
class Profil_model extends CI_Model{
    function getAll(){
        $this->db->select('*');
        $this->db->from('setup_bantuan');
        $this->db->where('kat_bantuan');
        $this->db->where('konten_bantuan');
        $query = $this->db->get();
        return $query;
    }
         
}
?>