<?php

class Transacao {
	private $identificador;
	private $valor;
	public function __construct($identificador){
		$this->identificador = $identificador;
	}
	
	public function getIdentificador(){
		return $this->identificador;
	}	
	public function setIdentificador($identificador){
		$this->identificador = $identificador;
	}
	public function getValor(){
		return $this->valor;
	}
	public function setValor($valor){
		$this->valor = $valor;
	}
	public function transferencia($origem, $destino, $valor){
		//origem e destino são objetos do tipo Conta
		$this->valor = $valor;
		if($origem->saque($valor)){
			$destino->deposito($valor);
			return true;
		}else{
			return false;
		}
	}
}