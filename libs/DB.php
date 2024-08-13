<?php
/*$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
mysqli_real_connect($conn, "azuremysqlgt.mysql.database.azure.com", "nbstargt", "{your_password}", "{your_database}", 3306, MYSQLI_CLIENT_SSL);
*/
class DB extends PDO {
	private $hostname = 'localhost'; //'azuremysqlgt.mysql.database.azure.com';
	private $database = 'tubagua';
	private $username = 'root' ;//'nbstargt';
	private $password = '';//'15Mar2010*!';
	private $pdo;
	private $sQuery;
	private $dbConnected = false;
	private $parameters;

	public function __construct() {
		$dsn = 'mysql:dbname='.$this->database.';host='.$this->hostname;
		parent::__construct($dsn, $this->username, $this->password, 
		array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
		/*$conn = mysqli_init();
		mysqli_real_connect($conn, $this->hostname, $this->username, $this->password,  $this->database, 3306);
		if (!$conn){
		die('Failed to connect to MySQL: '.mysqli_connect_error());
		}*/
		/*
		$dsn = mysqli_init();
			mysqli_ssl_set($con,NULL,NULL,NULL, NULL, NULL);
			mysqli_real_connect($conn, "azuremysqlgt.mysql.database.azure.com", "nbstargt", "15Mar2010*!", "tubagua", 3306, MYSQLI_CLIENT_SSL);
*/
	}

	public function CloseConnection() {
	 	$this->pdo = null;
	}

	private function Init($query,$parameters = "") {
		if (!$this->bConnected) { $this->Connect(); }
		try {
			$this->sQuery = $this->pdo->prepare($query);

			$this->bindMore($parameters);
			if(!empty($this->parameters)) {
				foreach($this->parameters as $param) {
					$parameters = explode("\x7F",$param);
					$this->sQuery->bindParam($parameters[0],$parameters[1]);
				}
			}
			$this->success = $this->sQuery->execute();
		} catch(PDOException $e) {
				echo $e->getMessage();
		}
		$this->parameters = array();
	}

	public function bind($para, $value) {
		$this->parameters[sizeof($this->parameters)] = ":" . $para . "\x7F" . utf8_encode($value);
	}

	public function bindMore($parray) {
		if(empty($this->parameters) && is_array($parray)) {
			$columns = array_keys($parray);
			foreach($columns as $i => &$column)	{
				$this->bind($column, $parray[$column]);
			}
		}
	}

	public function column($query,$params = null) {
		$this->Init($query,$params);
		$Columns = $this->sQuery->fetchAll(PDO::FETCH_NUM);
		$column = null;
		foreach($Columns as $cells) {
			$column[] = $cells[0];
		}
		return $column;

	}

	public function row($query,$params = null,$fetchmode = PDO::FETCH_ASSOC) {
		$this->Init($query,$params);
		return $this->sQuery->fetch($fetchmode);
	}

	public function single($query,$params = null) {
		$this->Init($query,$params);
		return $this->sQuery->fetchColumn();
	}

}
?>
