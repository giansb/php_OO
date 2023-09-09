<?php
    class Exemplo{
        public static $atributo1 = 'eu sou um atributo estatico';
        public $atributo2 = 'eu sou um atrbutor normal';

        public static function metodo1(){
            echo 'eu sou um metodo estatico';
        }

        public function metodo2(){
            echo 'eu sou um metodo normal';
        }
    }

    $x = new Exemplo();

    echo Exemplo::$atributo1;
?>