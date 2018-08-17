<?php
require_once('Cachorro.php');

class CachorroGrande extends Cachorro{

	public function latir(){
		parent::latir();
		echo "AU-AU!!";
	}
}