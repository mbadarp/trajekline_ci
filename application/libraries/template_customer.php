<?php
    class template_customer{
        protected $_ci;
        function __construct(){
            $this->_ci = &get_instance();
        }
        function views($template_customer = NULL, $data = NULL){
            if($template_customer != NULL){
            // Bagian $data['head'] untuk memanggil file head.php dari folder Admin/_Template/
        // ['head'] data yang kita panggil dari file template.php dari folder Admin/_Template/
           //$data['head'] = $this->_ci->load->view('customer/_template/head', $data, TRUE);
           
           $data['topbar'] = $this->_ci->load->view('customer/_template/topbar', $data, TRUE);

           $data['isi'] = $this->_ci->load->view($template_customer, $data, TRUE);

           $data['content'] = $this->_ci->load->view('customer/_template/content', $data, TRUE);

           $data['footer'] = $this->_ci->load->view('customer/_template/footer', $data, TRUE);

           //$data['js'] = $this->_ci->load->view('customer/_template/js', $data, TRUE);

           echo $data['template_customer'] =$this->_ci->load->view('customer/_template/template', $data, TRUE);
            }
        }
    }