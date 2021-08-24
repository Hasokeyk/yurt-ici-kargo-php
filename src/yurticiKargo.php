<?php


	namespace yurticiKargo;


	class yurticiKargo{

		public $liveRequest = 'http://webservices.yurticikargo.com:8080/KOPSWebServices/ShippingOrderDispatcherServices?wsdl';
		public $username;
		public $password;
		public $lang = 'TR';
		public $query;
		public $testMode = false;

		//TEST
		public $testRequest     = 'http://testwebservices.yurticikargo.com:9090/KOPSWebServices/ShippingOrderDispatcherServices?wsdl';
		public $testUsername    = 'YKTEST';
		public $testPassword    = 'YK';
		//TEST

		function __construct($data = []){

			if(!class_exists('SoapClient')){
				echo 'SoapClient Not Fount';
				exit;
			}

			if(isset($data['test']) and $data['test'] == true){
				$this->username = $this->testUsername;
				$this->password = $this->testPassword;
			}else{
				$this->username = $data['username'];
				$this->password = $data['password'];
			}
			$this->lang     = $data['lang']??$this->lang;
			$this->testMode = $data['test']??$this->testMode;

			$this->query();
		}

		function query(){

			if($this->testMode == false){
				$url = $this->liveRequest;
			}else{
				$url = $this->testRequest;
			}

			$this->query = new \SoapClient($url);

		}

		function createCargo($data = []){

			$defaults = [
				'cargoKey'          => null,
				'invoiceKey'        => null,
				'receiverCustName'  => null,
				'receiverAddress'   => null,
				'receiverPhone1'    => null,
				'receiverPhone2'    => null,
				'receiverPhone3'    => null,
				'cityName'          => null,
				'townName'          => null,
				'custProdId'        => null,
				'desi'              => null,
				'desiSpecified'     => false,
				'kg'                => false,
				'cargoCount'        => false,
				'waybillNo'         => false,
				'taxOfficeId'       => '340055',
				'ttDocumentId'      => 0,
				'dcSelectedCredit'  => 0,
				'dcCreditRule'      => 1,
			];

			$data = array_merge($defaults,$data);

			$cargoData = [
				'wsUserName'        => $this->username,
				'wsPassword'        => $this->password,
				'userLanguage'      => $this->lang,
				'ShippingOrderVO'   => $data
			];

			try{
				return $this->query->createShipment($cargoData);
			}catch (Exception $e){
				print_r('Hata : '.$e->getMessage());
			}

		}

		function cancelCargo($data = []){

			$cargoData = [
				'wsUserName'        => $this->username,
				'wsPassword'        => $this->password,
				'userLanguage'      => $this->lang,
				'cargoKeys'         => $data['cargoKeys']
			];

			try{
				return $this->query->cancelShipment($cargoData);
			}catch (Exception $e){
				print_r('Hata : '.$e->getMessage());
			}

		}

		function cargoStatus($data){

			$cargoData = [
				'wsUserName'        => $this->username,
				'wsPassword'        => $this->password,
				'wsLanguage'        => $this->lang,
				'keys'              => $data['cargoKeys']??$data['invoiceKey'],
				'keyType'           => isset($data['cargoKeys'])?0:1,
				'addHistoricalData' => true,
				'onlyTracking' => true,
			];

			try{
				return $this->query->queryShipment($cargoData);
			}catch (Exception $e){
				print_r('Hata : '.$e->getMessage());
			}

		}
	}