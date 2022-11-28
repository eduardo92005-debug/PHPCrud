<?php
    class Database {
        private $db = 'musicas';
        private $user = 'root';
        private $password = 'root';

        public function __construct() {
            $this->db = new PDO("mysql:host=localhost;dbname=$this->db", $this->user, $this->password);
        }

        public function getRow($sql,$attr = []) 
		{
			$sql = $this->db->prepare($sql);
			$sql->execute($attr);
			return $sql->fetch(PDO::FETCH_ASSOC);
		}
		
		public function getRows($sql,$attr = []) 
		{
			$sql = $this->db->prepare($sql);
			$sql->execute($attr);
			return $sql->fetchAll(PDO::FETCH_ASSOC);
		}
		
		public function save($sqlp,$attr = []) 
		{
			$sql = $this->db->prepare($sqlp);
			$sql->execute($attr);
			 
			$this->error = $sql->errorInfo();
			
			return $this->db->lastInsertId() ;
		}
		
		public function getError()
		{
			return $this->error;
		}
		
		public function getDebug()
		{
			// $this->debug = $sql->debugDumpParams();
			return false;
		}
		
		public function execute($sql,$attr = []) 
		{
			$sql = $this->db->prepare($sql);
			return $sql->execute($attr);
		}
    }
?>