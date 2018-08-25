<?php
class Conta{
	private $agencia;
	private $conta;
    private $saldo;
    private $limite = 1000;
    //construtor é chamado sempre que um objeto é criado - se não passar valores, considere nulos
    public function __construct($agencia=null, $conta=null){
    	$this->agencia = $agencia;
    	$this->conta = $conta;
    	$this->saldo = 0;
    }

    public function getConta()
    {
        return $this->conta;
    }

    public function setConta($novaConta)
    {
        $this->conta = $novaConta;
    }

	//método que retorna o valor de $agencia
	public function getAgencia(){
		return $this->agencia;
	}
	//método que muda o valor de $agencia
	public function setAgencia($novaAgencia){
		$this->agencia = $novaAgencia;
	}
	public function getSaldo()
	{
		return $this->saldo;
	}
	public function deposito($valor)
	{
		$this->saldo += $valor;
	}
	public function saque($valor){
		if (($this->saldo + $this->limite)>= $valor){
			$this->saldo -= $valor;		
			return true;
		}else{
			return false;
		}
	}
}