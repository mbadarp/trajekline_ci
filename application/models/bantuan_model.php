<?php
class bantuan_model extends CI_Model{
    function getAll(){
        $this->db->select('*');
        $this->db->from('setup_bantuan');
        $query = $this->db->get();
        return $query;
    }

    function getProfil(){
        $this->db->where('kat_bantuan', 'profil');
        $query = $this->db->get('setup_bantuan');
        return $query->result();
    }

    function getSyarat(){
        $this->db->where('kat_bantuan', 'syarat');
        $query = $this->db->get('setup_bantuan');
        return $query->result();
    }

    function getCbayar(){
        $this->db->where('kat_bantuan', 'pembayaran');
        $query = $this->db->get('setup_bantuan');
        return $query->result();
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

    
}
?>