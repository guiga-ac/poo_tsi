<?php

require_once "VeiculoPasseio.php";

class Motocicleta extends VeiculoPasseio
{
    private $altura_assento;

    public function getAlturaAssento(){
        return $this->altura_assento;
    }
    public function setAlturaAssento($altura_assento){
        $this->altura_assento = $altura_assento;
    }
    public function fazerRevisao(){
    	echo "Fazendo revisão da motocicleta...";
    }
}