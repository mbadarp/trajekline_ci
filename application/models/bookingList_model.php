<?php
class bookingList_model extends CI_Model {
    public function getAll(){
        $this->db->select('*');
        $this->db->from('tbl_pesan', 'paket_tour', 'login_user');
        $this->db->join('paket_tour', 'tbl_pesan.id_paket=paket_tour.id_paket');
        $this->db->join('login_user', 'username=login_user.username');
        //$this->db->join('tbl_pesan.id=login_user.id', 'tbl_pesan.id_paket=paket_tour.id_paket', 'username=login_user.username');
        //$this->db->where('tbl_pesan.id=login_user.id', 'tbl_pesan.id_paket=paket_tour.id_paket', 'username=login_user.username');
        //$this->db->join('tm_grup', 'tm_user.grup = tm_grup.id_grup');
        $query = $this->db->get();
        return $query;
        //$query=mysqli_query($koneksi, "SELECT * FROM tbl_pesan, paket_tour, login_user WHERE tbl_pesan.id=login_user.id AND 
        //tbl_pesan.id_paket=paket_tour.id_paket AND username=login_user.username")or die(mysqli_error($koneksi));
    }
  
    //fungsi untuk mengambil data dari tabel berdasarkan id grup
    //function getGrup(){
        //$this->db->order_by('id_grup', 'ASC');
        //return $this->db->from('tm_grup')->get()->result();
    //}

}
?>