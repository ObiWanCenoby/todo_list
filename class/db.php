<?php
class Base {
	private $username='root';
	private $password='';
	private $host='localhost';
	private $base='todolist';
	protected $conn;

	public function __construct(){
		$this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->base.'', 
				$this->username, $this->password);
	}
}
