<?php
    class Pai {
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

       
        public function getNome(){
            return $this->nome;
        }

        public function setNome($value){
            if(strlen($value) >=3){
                $this->nome = $value;
            }
        }

        public function __get($attr){
            return $this->$attr;
        }

        public function __set($attr, $value){
            $this->$attr = $value;
        }

        private function executarMania(){
            echo 'assoviar';
        }

        protected function responder(){
            echo 'oi';
        }

        public function executarAcao(){
            $this->executarMania();
        }
    }

    class Filho extends Pai {
        public function getAtributo($attr){
            return $this->$attr;
        }
    }

    $pai = new Pai();
    $pai->setNome('Roberto');
    echo $pai->getNome();
    echo '<br />';
    echo $pai->executarAcao();
    echo '<br />';
    $f = new Filho();
    echo $f->getAtributo('nome');
?>