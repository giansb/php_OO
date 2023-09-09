<?php
    class Pessoa {
        public $nome = null;

        function __construct($nome){
            $this->nome = $nome;
            echo 'objeto iniciado';
        }

        function __destruct(){
            echo 'objeto removido';
        }

        function __get($atributo){
            return $this->$atributo;
        }
    }

    $p = new Pessoa('Jorge');

    echo $p->__get('nome');
    unset($p);
?>