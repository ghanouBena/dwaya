<?php 
namespace core\DB_P;
use \PDO;


/**
* 
*/
class DB
{
	
	/*private static $DB_HOST = "localhost";
	private static $DB_NAME = "test";
	private static $DB_USER = "root";
	private static $DB_PASS = "";*/
	private static $pdo;
	
	/*function __construct()
	{
		self::$DB_HOST = $host;
		self::$DB_NAME = $name;
		self::$DB_USER = $user;
		self::$DB_PASS = $pass;
	}*/
	public  static function getPdo()
	{
		if(self::$pdo === NULL){
			try {
				
			$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
 					PDO::MYSQL_ATTR_INIT_COMMAND =>'SET CHARACTER SET UTF8',
 					PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8'];

			self::$pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME
				,DB_USER,DB_PASS, $opt);

			
			} catch (Exception $e) {
				die('ERROR : '.$e->getMessage());
				//die("ERROR");
			}
		}
		return self::$pdo;
	}
}

?>