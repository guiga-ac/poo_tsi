<?php
	include_once 'Conta.php';
	include_once 'Transacao.php';
	$c1 = new Conta('1234-4', '12321-9');
	$c1->deposito(1000);
	echo "\nA conta 1 está na agência ".$c1->getAgencia();
	echo "\nO numero da conta é ".$c1->getConta();
	echo "\nO saldo atual da conta 1 é :".$c1->getSaldo();

	$c2 = new Conta('4213-1', '12321-7');
	$c2->deposito(2500);
	echo "\nA conta 2 está na agência ".$c2->getAgencia();
	echo "\nO numero da conta é ".$c2->getConta();
	echo "\nO saldo atual da conta 2 é :".$c2->getSaldo();

	$transf = new Transacao('123123123-1');
	$valor = 450;
	if ($transf->transferencia($c2, $c1, $valor)){

		echo "\n Transferência feita com sucesso, no valor de ".$valor;
	}else{
		echo "Não foi possível efetuar a transferência!";
	}
	echo "\nO saldo atual da conta 1 é :".$c1->getSaldo();
	echo "\nO saldo atual da conta 2 é :".$c2->getSaldo();
