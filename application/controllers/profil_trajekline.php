<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profil_Trajekline extends CI_Controller {

public function __construct(){
    parent::__construct();
     $this->load->model('profil_model');
}

public function profil(){
        $this->load->view('profil_trajek');
        }
    }