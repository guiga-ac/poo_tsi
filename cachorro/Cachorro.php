<?php

/*
Comentário
de múltiplas 
linhas
*/

//definição da classe Cachorro
class Cachorro{
  //propriedades ou atributos
	public $cor;
	public $raca;
	public $porte;
	public $sexo;
	public $nome;
	public $ano_nascimento;
	private $idade;

  //métodos ou comportamentos

 public function calculaIdade(){
   	$this->idade = date('Y') - $this->ano_nascimento;
   	return $this->idade;
 }
    public function latir(){
    	echo "au-au!\n";
    }

    private function morder(){
    	echo "Nhac!\n";
    }

    public function atacar(){
    	$this->latir();
    	$this->morder();
    }

}