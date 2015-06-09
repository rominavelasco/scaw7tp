<?php 
	
	require_once("Dataclass/phpDataClass.php");
	require_once("Dataclass/dbconfig.php");


	class Miner {

		private $db;

		public function __construct(phpDataClass $dbSingle){
            $this->db = $dbSingle;
		}

		public function insertUpdateOrDeleteData($data){
			$query = "INSERT INTO table VALUES(NULL,".$data['field'].")";
			$result = $this->db->executeQuery($query);
			
			if(!$result){
				// operation failed
				// obtain the error by doing:
				// $this->db->lastError();
				// do whatever is needed
			}

      		return $result;
		}

		public function countRows($data){
			$query = "SELECT * FROM table";
			$this->db->rowCount($query);
			
			if(!$result){
				// operation failed
				// obtain the error by doing:
				// $this->db->lastError();
				// do whatever is needed
			}

      		return $result;
		}


		public function selectData($data) {
			$query = "SELECT * FROM table";
			$result = $this->db->executeQuery($query);
			
			if(!$result){
				// operation failed
				// obtain the error by doing:
				// $this->db->lastError();
				// do whatever is needed
			}

      		return $result;
		}


	}


	$Miner = new Miner($dbSingle);
