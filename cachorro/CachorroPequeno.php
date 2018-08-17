<?php
require_once('Cachorro.php');
/**
 * 
 */
class CachorroPequeno extends Cachorro
{
	public $porte = "Pequeno";
	public function latir(){
		parent::latir();
		echo "au-au-au!";
	}
}