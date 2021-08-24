<?php
    
    require "vendor/autoload.php";
    
    use yurticiKargo\yurticiKargo;
    
    $yurtici = new yurticiKargo([
        'username' => 'XXXXXXXXXXX',
        'password' => 'XXXXXXXXXXX',
        'test'     => true //TEST MODE true / false
    ]);
    
    //CREATE CARGO
    $kargoYolla = $yurtici->createCargo([
        'cargoKey'         => 'HSN-0000001',
        'invoiceKey'       => 'TEST-0000001',
        'receiverCustName' => 'Hasan Yüksektepe',
        'receiverAddress'  => 'Test Adres',
        'receiverPhone1'   => '05414233558',
    ]);
    print_r($kargoYolla);
    //CREATE CARGO