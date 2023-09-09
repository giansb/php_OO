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

        function trocarMarcha(){
            echo 'trocar de marcha moto';
        }
    }

    class Veiculo{
        public $placa = null;
        public $cor = null;


        function acelerar(){
            echo 'Acelerar';
        }


        function trocarMarcha(){
            echo 'Desengatar embreagem com o pé e engatar marcha';
        }
    }

    $c = new Carro('AU22', 'branco');

    $m = new Moto();

    print_r($c->trocarMarcha());
    echo '<br />';
    print_r($m->trocarMarcha());
   
?>