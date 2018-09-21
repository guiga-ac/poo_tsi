<?php

class Veiculo
{
    private $num_rodas;
    private $color;
    private $combustivel;
    private $velocidade;

    public function getNumRodas()
    {
        return $this->num_rodas;
    }
    public function setNumRodas($num_rodas)
    {
        $this->num_rodas = $num_rodas;
    }

    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getCombustivel()
    {
        return $this->combustivel;
    }
    public function setCombustivel($combustivel)
    {
        $this->combustivel = $combustivel;
    }
    public function getVelocidade()
    {
        return $this->velocidade;
    }
    public function setVelocidade($velocidade)
    {
        $this->velocidade = $velocidade;
    }

    public function darPartida(){
        echo 'Veículo está dando partida...';
    }
    public function acelerar(){
        echo 'Veículo está acelerando...';
    }
    public function freiar(){
        echo 'Veículo está freiando...';
    }
}