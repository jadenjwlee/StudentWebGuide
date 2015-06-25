<?php 

	class Database{
		private static $dsn = 'mysql:host=my03.winhost.com;dbname=mysql_90922_student';
		private static $username = 'student';
		private static $password = 'student';

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
					//include '../Errors/DatabaseError.php';
					exit();	
				}
			}
			return self::$dbCon;
		}
	}

?>