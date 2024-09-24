<?php
require_once 'ModeloBase.php';
//require_once './libs/DB.php';

class pdfModel extends DB {

	public function __construct() {
		parent::__construct();
	
	}

	public function creaPdf($id) {
		try {
			$this->creaPdf($id);
		} catch (PDOException $e){
			echo "Error: ".$e->getMessage();
		}
		
	}
}
