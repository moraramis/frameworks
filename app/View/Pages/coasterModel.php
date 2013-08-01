<?php

class coasterModel {
	private $db;
	
	public function __construct($dsn, $user, $pass){
		try{
			$this->db = new \PDO($dsn, $user, $pass);
		}
		catch (\PDOException $e){
			var_dump($e);
		}
	}
	
	public function getInfo(){
		$statement = $this->db->prepare("
		SELECT coasterId, coasterName
		FROM rollercoaster
		WHERE (coasterName IS NOT NULL)
		ORDER BY coasterName
		");
		try{
			if ($statement->execute()){
				$rows = $statement->fetchALL(\PDO::FETCH_ASSOC);
				return $rows;
			}
		}
		catch (\PDOException $e){
			echo "We had a problem. Try again.";
			var_dump($e);
		}
		return array();
	}
		
	public function getCoasterDetails($id){
		$statement = $this->db->prepare("
		SELECT coasterId, coasterName, location, coasterType, yearCreated, height, rideTime
		FROM rollercoaster
		WHERE coasterId = :c_Id
		");
		try{
			if($statement->execute(array(":c_Id"=>$id))){
				$rows = $statement->fetchALL(\PDO::FETCH_ASSOC);
				return $rows;
			}
		}
		catch (\PDOException $e){
			echo "We had a problem. Try again.";
			var_dump($e);
		}
		return array();
	}
}
	
?>