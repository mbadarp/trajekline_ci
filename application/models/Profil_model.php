<?php
class Profil_model extends CI_Model{
    function getAll(){
        $this->db->select('*');
        $this->db->from('login_user');
        $query = $this->db->get();
        return $query;
    }
    
    
}
?>