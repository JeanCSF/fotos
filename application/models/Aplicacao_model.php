<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Aplicacao_model extends CI_Model {
        
        public function todas_fotos_publicas(){
            //vai buscar todas as imagens que são públicas
            $resultado = $this->db->select('*')
                                  ->from('fotos')
                                  ->join('usuarios', 'usuarios.idUsuario = fotos.idUsuario')
                                  ->where('publica', true)
                                  ->get();
            return $resultado->result_array();
        }
        
        public function guardar_foto($nome_foto, $publica){
            //guarda a foto na base de dados com o nome original
            date_default_timezone_set('America/Sao_Paulo');
            $dados = array(
                'idUsuario'     => $this->session->idUsuario,
                'foto'          => $nome_foto,
                'dataHora'      => date('Y-m-d H:i:s'),
                'publica'       => $publica
            );
            $this->db->insert('fotos', $dados);
        }

        public function buscar_fotos_usuario(){
            //busca as fotos do usuário da sessão atual
            //$resultados = $this->db->get_where
            $resultados = $this->db->select('*')
                                   ->from('fotos')
                                   ->join('usuarios', 'usuarios.idUsuario = fotos.idUsuario')
                                   ->where('fotos.idUsuario', $this->session->idUsuario)
                                   ->get();
            return $resultados->result_array();
        }

        public function mudar_para_privada($id){
            //torna a foto privada
            $this->db->set('publica', false)
                     ->where('idFoto', $id)
                     ->update('fotos');
        }
        public function mudar_para_publica($id){
            //torna a foto privada
            $this->db->set('publica', true)
                     ->where('idFoto', $id)
                     ->update('fotos');
        }

        public function eliminar($id){
            //elimina a foto
            //busca os dados da foto
            $resultados = $this->db->get('fotos', array('idFoto' => $id));

            if($resultados->num_rows() !== 0){
                //elimina foto da base de dados
                $this->db->delete('fotos', array('idFoto' => $id));

                //elimina a foto da pasta
                $foto = $resultados->result_array()[0]['foto'];
                unlink('./assets/fotos/'.$foto);
            }
        }
    }

?>
