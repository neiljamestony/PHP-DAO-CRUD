<?php
/**
 * Connection properties
 *
 * @author: http://phpdao.com
 * @date: 27.11.2007
 */
class ConnectionProperty{

	private static $host = 'localhost';
	private static $user = 'root';
	private static $password = '';
	private static $database = 'smurf';
	
	public static function getHost(){
		return ConnectionProperty::$host;
	}

	public static function getUser(){
		return defined("DATABASE_USER") ? DATABASE_USER : ConnectionProperty::$user;
	}

	public static function getPassword(){
		return defined("DATABASE_PASS") ? DATABASE_PASS : ConnectionProperty::$password;
	}

	public static function getDatabase(){
		return defined("DATABASE_NAME") ? DATABASE_NAME : ConnectionProperty::$database;
	}
	
	public static function getConnection(){
		return mysqli_connect(
			ConnectionProperty::$host,
			defined("DATABASE_USER") ? DATABASE_USER : ConnectionProperty::$user,
			defined("DATABASE_PASS") ? DATABASE_PASS : ConnectionProperty::$password,
			defined("DATABASE_NAME") ? DATABASE_NAME : ConnectionProperty::$database
		);
	}
}
?>