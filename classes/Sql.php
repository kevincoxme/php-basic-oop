<?php

class Sql{

	// protected ung sinet ntin sa properties ng connection params
	// meaning ung magiinherit and class itself lng mkakagamit 
	protected $host = 'localhost:3306';
	protected $user = 'root';
	protected $pass = '';
	protected $db = 'db_oop';
	protected $connect;

	// Ilagay ntin ung connection once na niload itong class
	public function __construct(){

		//ilalagay ntin ung connection ky $this->connect properties para maaccess ntin sa loob ng class
		$this->connect = mysqli_connect($this->host, $this->user, $this->pass, $this->db);

		// Validation to check whether succcessfull or not ung attempt ntin sa pagconnect sa database
		if (!$this->connect) {
			die('Could not connect to the database');
		}else{
			echo "Connected!";
		}
	}

	// lastly create tayong methods para ibigay nia ung database or connection
	public function getConnection(){
		return $this->connect;
	}
}