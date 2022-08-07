<?php 

class Database{

	private $HOST = "localhost";
	private $USER = "root";
	private $PASS = "";
	private $DB_NAME = "lms";

	private function connect(){

		$string = "mysql:host=$this->HOST;dbname=$this->DB_NAME";
		
		try{

			$con = new PDO($string,$this->USER,$this->PASS);
		}catch(PDOException $e){

			die($e->getMessage());
		}

		return $con;
	}

	public function write($query){

		$con = $this->connect();
 
		
		$result = $con->query($query);
		
		if($result){
			return $con->lastInsertId();
		}else{
			return false;
		}
	}

	public function read($query){
		$con = $this->connect();

		$sql = $con->query($query);
	
		$result = $sql->fetchAll(PDO::FETCH_ASSOC);
		if(is_array($result) && count($result) > 0){
			return $result;
			
			}
			
			
		return false;
	}
	public function createTable($query){
		$con = $this->connect();

		$sql = $con->query($query);
		
		
		
		return $sql;
	}

	
}

$db_obj=new Database();