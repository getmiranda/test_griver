<?php 
include 'Conexion.php';

	class ContactCrud{

		public function __construct(){

		}
		
		// método para mostrar todos los companies
		public function all(){
			
			$db = DataBase::conectar();
			$contacts=[];
			$contacts = $db->query('SELECT * FROM contact');

			return $contacts;
		}

	}
 ?>