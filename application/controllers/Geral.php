<?php
    defined('BASEPATH') OR exit('URL inválida');

    class Geral extends CI_Controller{

        public function index(){
            //verifica se existe sessão
            if($this->session->has_userdata('idUsuario')){
                redirect('aplicacao');
            }else{
                $this->home();
            }
        }
        
        public function home(){
            if($this->session->has_userdata('idUsuario')){
                redirect('aplicacao');
            }else{
                $this->load->view('layouts/inicio');
                $this->load->view('home');
                $this->load->view('layouts/fim');
            }
        }
    }
?>