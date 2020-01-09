<?php

	require "yurticiKargo.php";

	use yurticiKargo\yurticiKargo;

	$yurticı = new yurticiKargoEntegre([
		'username' => 'XXXXXXXXXXX',
		'password' => 'XXXXXXXXXXX',
		'test'     => true //TEST MODE true / false
	]);

	//CREATE CARGO
	$kargoYolla = $yurticı->createCargo([
		'cargoKey'          => 'HSN-0000001',
		'invoiceKey'        => 'TEST-0000001',
		'receiverCustName'  => 'Hasan Yüksektepe',
		'receiverAddress'   => 'Test Adres',
		'receiverPhone1'    => '05414233558',
	]);
	print_r($kargoYolla);
	//CREATE CARGO

	//CARGO STATUS
	$kargoDurum = $yurticı->cargoStatus([
		'cargoKeys'     => 'KLSN-0000001',
		'invoiceKey'    => 'TEST-0000001',
	]);
	print_r($kargoDurum);
	//CARGO STATUS

	//CANCEL CARGO
	$kargoIptal = $yurticı->cancelCargo([
		'cargoKeys'     => 'KLSN-0000001',
		'invoiceKey'    => 'TEST-0000001',
	]);
	print_r($kargoIptal);
	//CANCEL CARGO