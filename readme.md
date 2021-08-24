## Yurt içi Kargo - Php Kütüphanesi

Bu kütüphane ile php alt yapılı sisteminize "yurt içi kargo" firmasına ait kargo işlemlerinizi entegre edebilirsiniz.

## Composer ile kurulum

* Çalışma klasörünüzü belirledikten sonra o klasörde terminal açıp aşağıdaki komutu yazıp entere basın.
```shell
composer require hasokeyk/yurt-ici-kargo
```

# Örnek Kodlar

### Kargo Yollama

```php
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

```

### Kargo Durum Bilgisi Alma

```php
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

```

### Kargo İptal Etme

```php
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
		'cargoKey'          => 'HSN-0000001',
		'invoiceKey'        => 'TEST-0000001',
		'receiverCustName'  => 'Hasan Yüksektepe',
		'receiverAddress'   => 'Test Adres',
		'receiverPhone1'    => '05414233558',
	]);
	print_r($kargoYolla);
	//CREATE CARGO
```