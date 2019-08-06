
<?php

class connect_DB {
	protected static $instance;
	protected function __construct() {}
	public static function getInstance() {
		if(empty(self::$instance)) {
			$db_info = array(
				"db_host" => "localhost",
				"db_user" => "root",
				"db_pass" => "",
				"db_name" => "test",
				"db_charset" => "UTF-8");
			try {
				self::$instance = new PDO("mysql:host=".$db_info['db_host'].';dbname='.$db_info['db_name'], $db_info['db_user'], $db_info['db_pass']);
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);  
				self::$instance->query('SET NAMES utf8');
				self::$instance->query('SET CHARACTER SET utf8');
			} catch(PDOException $error) {
				echo $error->getMessage();
			}
		}
		return self::$instance;
	}
	public static function setCharsetEncoding() {
		if (self::$instance == null) {
			self::connect();
		}
		self::$instance->exec(
			"SET NAMES 'utf8';
			SET character_set_connection=utf8;
			SET character_set_client=utf8;
			SET character_set_results=utf8");
	}
}
?>