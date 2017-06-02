<?php
class DBConnection {
	private $dbhost = "localhost";
	private $dbuser = "root";
	private $dbpass = "root";
	private $dbname = "abTrackerDB";
	public $connection = null;

	public static $DBConnection = null;

	public function __construct() {
		$this->connection = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname) or die("Connect failed.".$this->connection->error);

	}

	public static function connect() {
		if(self::$DBConnection == null) {
			self::$DBConnection = new DBConnection();
		} 
		return self::$DBConnection->connection;
	}



}
