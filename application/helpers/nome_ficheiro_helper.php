<?php
    function definir_nome_ficheiro($original, $extensao){
        $caracteres = "abcdefghijklmnopqrstuvwxyz";
        $sufixo = '';
        for($i = 0; $i < 10; $i++){
            $sufixo.=substr($caracteres,rand(0,strlen($caracteres)-1),1);
        }
        return $original.'_'.$sufixo.'.'.$extensao;
    }
?>