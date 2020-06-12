<?php
class bookingList_model extends CI_Model {
    public function getAll(){
        $this->db->select('*');
        $this->db->from('login_user');
        $this->db->join('tbl_pesan', 'login_user.id=tbl_pesan.id');
        $this->db->join('paket_tour', 'tbl_pesan.id_paket=paket_tour.id_paket');
        
        $query = $this->db->get();
        return $query;
        
    }

    function getCustomer($username){
        $user = $this->db->get_where('login_user', ['username' => $username])->row_array();

        return $user;
        // $results = array();
        // $this->db->select("*");
        // $this->db->from('login_user');
        // $this->db->where('username', $this->session->userdata('username'));
        // $query = $this->db->get();

        // if($query->num_rows() > 0) {
        //     $results = $query->result();
        // }
        // return $results;
        // $this->db->select('*');
        // $this->db->from('login_user');
        // $this->db->where('username',$this->session->userdata('username'));
        // $query = $this->db->get();
        // return $query;
    }

    /*function get_Data($id){
        $id = $this->session->userdata('session_level');
        $this->db->select('id');
        $this->db->where('id', $id);
        $this->db->from('login_user');
        return $query->result();
    }

    function getGrup(){
        $this->db->order_by('id_pesan', 'ASC');
        return $this->db->from('tbl_pesan')->get()->result();
    }

    function ambilData($id,$username,$table){
        $this->db->select('*');
        $this->db->from('login_user', $table);        
        $this->db->where('id', $id);
        $this->db->where('username', $username);
        $query = $this->db->get();
        return $query;
    }*/

  
    //fungsi untuk mengambil data dari tabel berdasarkan id grup
    //function getGrup(){
        //$this->db->order_by('id_grup', 'ASC');
        //return $this->db->from('tm_grup')->get()->result();
    //}



    //$this->db->where('login_user', $this->session->userdata('session_level'));
        //$this->db->from('tbl_pesan');
        //$this->db->join('paket_tour', 'tbl_pesan.id_paket=paket_tour.id_paket');
        //$this->db->join('login_user', 'tbl_pesan.id=login_user.id');
        //$this->db->where('id', $id);
        //$this->db->join('tbl_pesan.id=login_user.id', 'tbl_pesan.id_paket=paket_tour.id_paket', 'username=login_user.username');
        //$this->db->where('tbl_pesan.id=login_user.id', 'tbl_pesan.id_paket=paket_tour.id_paket', 'username=login_user.username');
        //$this->db->join('tm_grup', 'tm_user.grup = tm_grup.id_grup');
}
?>

