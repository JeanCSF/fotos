<?php
    defined('BASEPATH') OR exit('URL inválida');

    class Usuarios extends CI_Controller{

        public function login(){
            if($this->input->method()!='post'){
                //formulario
                $this->load->view('layouts/inicio');
                $this->load->view('usuarios/login');
                $this->load->view('layouts/fim');
            }else{
                //tratamento do formulário

                //verifica se os campos foram preenchidos (validação server side)
                if($this->input->post('text_usuario') == '' ||
                    $this->input->post('text_senha') == ''){
                        //define mensagem de erro
                        $dados['erro'] = 'Os dois campos são obrigratórios!!!';
                        $this->load->view('layouts/inicio');
                        $this->load->view('usuarios/login', $dados);
                        $this->load->view('layouts/fim');
                        return;
                    }
                $this->load->model('usuarios_model', 'usuarios');
                if($this->usuarios->verificar_login()){
                    redirect('geral/home');
                }else{
                    $dados['erro'] = 'Usuário ou senha inválidos!!!';
                    $this->load->view('layouts/inicio');
                    $this->load->view('usuarios/login', $dados);
                    $this->load->view('layouts/fim');
                }
            }
        }


        public function signup(){
            //apresenta o formulario para criar um novo usuário ou trata o post do formulario
            if($this->input->method() != 'post'){
                //apresenta o formulario para a criação de um novo usuário
                $this->load->view('layouts/inicio');
                $this->load->view('usuarios/signup');
                $this->load->view('layouts/fim');
                return;
            }

            //validações
            //verifica se as senhas digitadas correspondem
            if($this->input->post('text_pass_1') !== $this->input->post('text_pass_2')){
                $dados['erro'] = 'As senhas não correspondem!';
                $this->load->view('layouts/inicio');
                $this->load->view('usuarios/signup',$dados);
                $this->load->view('layouts/fim');
                return;
            }

        $this->load->model('usuarios_model', 'usuarios');

        //verifica se já existe um usuário com o mesmo nome ou email
        if($this->usuarios->signup_check_usuario()){
            $dados['erro'] = 'Já existe um usuário com o mesmo nome ou email';
            $this->load->view('layouts/inicio');
            $this->load->view('usuarios/signup',$dados);
            $this->load->view('layouts/fim');
            return;
        }
        //executa o cadastro
        $this->usuarios->signup_criar_conta();
        //apresenta a informação de que foi criada uma nova conta de usuario
        $this->load->view('layouts/inicio');
        $this->load->view('usuarios/signup_sucesso');
        $this->load->view('layouts/fim');
        }

        public function logout(){
            //faz logout do usuário
            if($this->session->has_userdata('idUsuario')){
                //destroi dados da sessão
                $this->session->unset_userdata('idUsuario');
                $this->session->unset_userdata('usuario');
                $this->session->unset_userdata('email');
                redirect('geral');
            }else{
                redirect('geral');
            }
            
        }
    }

?>