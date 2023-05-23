<?php
    class nomes{
        private $nome;
        private $apelido;

        public function setNome($n){
            $thisnome = $n;
        }

        public function setApelido($n){
            $this->apelido = $n;
        }

        public function nomeCompleto(){
            return $this->nome . ' ' . $this->apelido;
        }
    }
?>