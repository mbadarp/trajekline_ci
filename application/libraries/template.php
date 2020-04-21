<?php
    class template{
        protected $_ci;
        function __construct(){
            $this->_ci = &get_instance();
        }
        function views($template = NULL, $data = NULL){
            if($template != NULL){
            // Bagian $data['head'] untuk memanggil file head.php dari folder Admin/_Template/
        // ['head'] data yang kita panggil dari file template.php dari folder Admin/_Template/
           $data['head'] = $this->_ci->load->view('admin/_template/head', $data, TRUE);
           
           $data['topbar'] = $this->_ci->load->view('admin/_template/topbar', $data, TRUE);

           $data['sidebar'] = $this->_ci->load->view('admin/_template/sidebar', $data, TRUE);

           $data['isi'] = $this->_ci->load->view($template, $data, TRUE);

           $data['content'] = $this->_ci->load->view('admin/_template/content', $data, TRUE);

           $data['footer'] = $this->_ci->load->view('admin/_template/footer', $data, TRUE);

           $data['js'] = $this->_ci->load->view('admin/_template/js', $data, TRUE);

           echo $data['template'] =$this->_ci->load->view('Admin/_Template/Template', $data, TRUE);
            }
        }
    }