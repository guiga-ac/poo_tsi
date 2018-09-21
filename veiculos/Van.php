<?php
require_once 'VeiculoCarga.php';

class Van extends VeiculoCarga
{
    private $qtde_caixas;

    public function getQtdeCaixas()    {
        return $this->qtde_caixas;
    }
    public function setQtdeCaixas($qtde_caixas){
        $this->qtde_caixas = $qtde_caixas;
    }
    public function carregarFurgao(){
        echo 'Carregando o furgão...';
    }
}