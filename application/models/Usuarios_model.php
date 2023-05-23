<?php
    defined('BASEPATH') OR exit('URL inválida');

    class Usuarios_model extends CI_Model{
        
        public function signup_check_usuario(){
            //verifica se já existe um usuário com o mesmo nome ou email
            $usuario = $this->input->post('text_usuario');
            $email = $this->input->post('text_email');
            $resultados = $this->db->from('usuarios')
                                   ->where('usuario', $usuario)
                                   ->or_where('email', $email)
                                   ->get();
            return $resultados->num_rows() !== 0 ? true : false;
        }

        public function signup_criar_conta(){
            //cria uma nova conta de usuario
            $dados = array(
                'usuario'       => $this->input->post('text_usuario'),
                'senha'         => password_hash($this->input->post('text_pass_1'), PASSWORD_DEFAULT),
                'email'         => $this->input->post('text_email')
            );
            $this->db->insert('usuarios', $dados);
        }

        public function verificar_login(){
            //verifica se os dados inseridos são os corretos para o login
            //pesquisar na base de dados se usuario e senha estão corretos
            $usuario = $this->input->post('text_usuario');
            $senha = $this->input->post('text_senha');
            $resultados = $this->db->from('usuarios')
                                   ->where('usuario', $usuario)
                                   ->get();
            $row = $resultados->row();
            if (isset($row)){
                //Using hashed password - PASSWORD_BCRYPT method - from database
                $hash = $row->senha;
                if (password_verify($senha, $hash)) {
                    $this->session->set_userdata(
                        array(
                            'idUsuario'     => $resultados->row()->idUsuario,
                            'usuario'       => $resultados->row()->login,
                            'email'         => $resultados->row()->email
                        )
                    );
                    return true;
                }else{
                    return false;
                }
            }
        }
    }
?>