<?php
class Validasi_model extends CI_Model{
    function getAll(){
        $this->db->select('*');
        $this->db->from('tbl_pesan');
        $this->db->join('login_user','login_user.id=tbl_pesan.id');
        $this->db->join('paket_tour','paket_tour.id_paket=tbl_pesan.id_paket');
        $query = $this->db->get();
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
    function getPesa(){
        $this->db->select('*');
        $this->db->from('tbl_pesan');
        $query = $this->db->get();
        return $query->result();
    }
    function getPesan($id_pesan = null){
        $this->db->from('tbl_pesan');
        if($id_pesan != null){
            $this->db->where('tgl_pesan',$id_pesan);
        }
        $query = $this->db->get();
        return $query;
   }

    function getBooking(){
        $this->db->select('*');
        $this->db->from('tbl_pesan');
        $this->db->join('login_user','login_user.id=tbl_pesan.id');
        $this->db->join('paket_tour','paket_tour.id_paket=tbl_pesan.id_paket');
        $this->db->limit(5);
        $query = $this->db->get();
        return $query->result();
    }
    function getBukti(){
        $this->db->select('*');
        $this->db->from('tbl_bukti');
        $this->db->join('tbl_pesan','tbl_pesan.id_pesan=tbl_bukti.id_pesan');
        $this->db->join('login_user','login_user.id=tbl_pesan.id');
        $query = $this->db->get();
        return $query->result();
    }
}
?>