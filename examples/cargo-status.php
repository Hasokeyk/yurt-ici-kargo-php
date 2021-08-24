<?php

	require "vendor/autoload.php";

	use yurticiKargo\yurticiKargo;

	$yurtici = new yurticiKargo([
		'username' => 'XXXXXXXXXXX',
		'password' => 'XXXXXXXXXXX',
		'test'     => true //TEST MODE true / false
	]);
	
	//CARGO STATUS
	$kargoDurum = $yurtici->cargoStatus([
		'cargoKeys'     => 'KLSN-0000001',
		'invoiceKey'    => 'TEST-0000001',
	]);
	print_r($kargoDurum);
	//CARGO STATUS
