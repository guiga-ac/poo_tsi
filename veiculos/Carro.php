<?php
require_once 'VeiculoPasseio.php';

class Carro extends VeiculoPasseio
{
    private $num_portas;

    public function getNumPortas(){
        return $this->num_portas;
    }
    public function setNumPortas($num_portas){
        $this->num_portas = $num_portas;
    }

}