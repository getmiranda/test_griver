<?php
	class DataBase{
		private static $conexion = NULL;
		const DB = "test_griver";
		const USER = "root";
		const PASS = "";

		private function __construct (){}

		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;

			self::$conexion= new PDO("mysql:host=localhost;dbname=".self::DB, self::USER, self::PASS, $pdo_options);
			return self::$conexion;
		}		
	} 
?>