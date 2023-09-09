<?php
    class Carro extends Veiculo{
        public $teto_solar = true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor; 
        }

        function abrirTetoSolar(){
            echo 'Abrir teto solar';
        }

        function alterarPosicaoVolante(){
            echo 'Alterar posição volante';
        }

        
    }

    class Moto extends Veiculo{
        public $contraPesoGuidao = true;

        function empinar(){
            echo 'empinar';
        }
    }

    class Veiculo{
        public $placa = null;
        public $cor = null;


        function acelerar(){
            echo 'Acelerar';
        }
    }

    $c = new Carro('AU22', 'branco');

    $m = new Moto();

    print_r($c);
    print_r($m);


   
?>