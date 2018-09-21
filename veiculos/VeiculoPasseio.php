<?php
require_once 'Veiculo.php';

class VeiculoPasseio extends Veiculo
{
    private $capac_passageiros;

    public function getCapacPassageiros()
    {
        return $this->capac_passageiros;
    }

    public function setCapacPassageiros($capac_passageiros)
    {
        $this->capac_passageiros = $capac_passageiros;
    }


}