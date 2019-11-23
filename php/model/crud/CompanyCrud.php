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

		public function insert($company)
		{	
			$db = DataBase::conectar();
			$insert=$db->prepare( 'INSERT INTO company (company_name, company_rfc, company_address, business_stream, company_website_url, company_country) 
			values( :company_name, :company_rfc, :company_address, :business_stream, :company_website_url, :company_country)' );
			$insert->bindValue('company_name', $company->get_company_name());
			$insert->bindValue('company_rfc', $company->get_company_rfc());
			$insert->bindValue('company_address', $company->get_company_address());
			$insert->bindValue('business_stream', $company->get_business_stream());
			$insert->bindValue('company_website_url', $company->get_company_website_url());
			$insert->bindValue('company_country', $company->get_company_country());
			$insert->execute();
		}

		public function delete( $id ){
			$db = DataBase::conectar();
			$delete=$db->prepare( 'DELETE FROM company WHERE id=:id' );
			$delete->bindValue( 'id', $id );
			$delete->execute();
		}

		public function update( $company ){
			$db = DataBase::conectar();
			$update = $db->prepare('UPDATE company SET company_name=:company_name, company_rfc=:company_rfc, company_address=:company_address, business_stream=:business_stream, company_website_url=:company_website_url, company_country=:company_country WHERE id=:id');

			$update->bindValue('id', $company->get_id());
			$update->bindValue('company_name', $company->get_company_name());
			$update->bindValue('company_rfc', $company->get_company_rfc());
			$update->bindValue('company_address', $company->get_company_address());
			$update->bindValue('business_stream', $company->get_business_stream());
			$update->bindValue('company_website_url', $company->get_company_website_url());
			$update->bindValue('company_country', $company->get_company_country());
			$update->execute();
		}

	}
 ?>