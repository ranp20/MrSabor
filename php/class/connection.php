<?php  

	class Connection{

		protected $con = null;
		private $host = "localhost";
		private $dbname = "db_mrsabor";
		private $username = "root";
		private $password = "";
		private $charset = "utf8";

		public function __construct(){
			try{

				$this->con = new PDO("mysql:host={$this->host}; dbname={$this->dbname};charset={$this->charset}", $this->username, $this->password);
				$this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			}catch(PDOException $e){
				echo "Error al conectar con la base de datos:".$this->dbname;
				die($e->getMessage());
			}
		}

		public function close(){
			if($this->con != null) $this->con = null;
		}

	}

