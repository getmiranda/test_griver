<?php 
include 'Conexion.php';

	class CompanyCrud{

		public function __construct(){

		}
		
		// método para mostrar todos los companies
		public function companies(){
			
			$db = DataBase::conectar();
			$companies=[];
			$companies = $db->query('SELECT * FROM company');

			return $companies;
		}

		// método para mostrar todos los companies
		public function contacts_of_company($id){
			
			$db = DataBase::conectar();
			$contacts=$db->prepare('SELECT * FROM contact WHERE company_id = :id');
			$contacts->bindValue('id', $id);
			$contacts->execute();

			return $contacts;
		}

		public function find($id)
		{
			$db = DataBase::conectar();
			$select=$db->prepare('SELECT * FROM company WHERE id=:id');
			$select->bindValue('id', $id);
			$select->execute();
			$company=$select->fetch();

			return $company;
		}

	}
 ?>