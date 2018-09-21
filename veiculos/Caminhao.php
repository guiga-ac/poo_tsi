<?php

require_once "VeiculoCarga.php";
class Caminhao extends VeiculoCarga
{
    private $tam_container;

    public function getTamContainer(){
        return $this->tam_container;
    }
    public function setTamContainer($tam_container){
        $this->tam_container = $tam_container;
    }
    public function carregarContainer(){
        echo "Carregando o container...";
    }
}