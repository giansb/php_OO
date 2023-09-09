<?php
    class Funcionario {
        public $nome = 'José';
        public $telefone = '51 9999-9999';
        public $numFilhos = 2;

        function setNome($nome){
            $this->nome = $nome;
        }

        function resumirCadFunc() {
            return "$this->nome possui $this->numFilhos filho(s)";
        }

        function modificarNumFilhos($num){
            $this->numFilhos = $num;
        }


    }


    $f = new Funcionario();
    $f->setNome('rodrigo');
    echo $f->resumirCadFunc();
    $f->modificarNumFilhos(4);
    echo $f->resumirCadFunc();
?>