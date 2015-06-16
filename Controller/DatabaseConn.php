<?php 

	class Database{
		private static $dsn = 'mysql:host=localhost;dbname=StudentWebGuide';
		private static $username = 'root';
		private static $password = 'FANder2008';

		//reference to db connection
		private static $dbCon;

		public function _construct(){}

		//return reference to pdo object
		public static function getDB(){
			if(!isset(self::$dbCon)){
				//set the database connection string
				try {
					self::$dbCon = new PDO(self::$dsn, self::$username, self::$password);
				} 
				//pust the exception for connecting database
				catch (PODException $e) {
					$error_message = $e->getMessage();
					include '../Errors/DatabaseError.php';
					exit();	
				}
			}
			return self::$dbCon;
		}
	}

?>