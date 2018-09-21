<?php
require_once 'Veiculo.php';

abstract class VeiculoCarga extends Veiculo
{
    private $num_portas;
    private $capac_carga;

    public function getNumPortas()
    {
        return $this->num_portas;
    }
    public function setNumPortas($num_portas)
    {
        $this->num_portas = $num_portas;
    }

    public function getCapacCarga()
    {
        return $this->capac_carga;
    }

    public function setCapacCarga($capac_carga)
    {
        $this->capac_carga = $capac_carga;
    }

}