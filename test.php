<?php

	require "yurticiKargo.php";

	use yurticiKargo\yurticiKargo;

	$yurtici = new yurticiKargo([
		'username' => 'XXXXXXXXXXX',
		'password' => 'XXXXXXXXXXX',
		'test'     => true //TEST MODE true / false
	]);

	//CREATE CARGO
	$kargoYolla = $yurtici->createCargo([
		'cargoKey'          => 'HSN-0000001',
		'invoiceKey'        => 'TEST-0000001',
		'receiverCustName'  => 'Hasan Yüksektepe',
		'receiverAddress'   => 'Test Adres',
		'receiverPhone1'    => '05414233558',
	]);
	print_r($kargoYolla);
	//CREATE CARGO

	//CARGO STATUS
	$kargoDurum = $yurtici->cargoStatus([
		'cargoKeys'     => 'KLSN-0000001',
		'invoiceKey'    => 'TEST-0000001',
	]);
	print_r($kargoDurum);
	//CARGO STATUS

	//CANCEL CARGO
	$kargoIptal = $yurtici->cancelCargo([
		'cargoKeys'     => 'KLSN-0000001',
		'invoiceKey'    => 'TEST-0000001',
	]);
	print_r($kargoIptal);
	//CANCEL CARGO