<?php 
require_once('Conexion.php');

	class ContactCrud{

		public function __construct(){

		}

		public function all(){
			
			$db = DataBase::conectar();
			$contacts=[];
			$contacts = $db->query('SELECT * FROM contact');

			return $contacts;
		}
		
		// // método para mostrar todos los companies
		// public function companies(){
			
		// 	$db = DataBase::conectar();
		// 	$companies=[];
		// 	$companies = $db->query('SELECT * FROM contact');

		// 	return $companies;
		// }

		// // método para mostrar todos los companies
		// public function contacts_of_contact($id){
			
		// 	$db = DataBase::conectar();
		// 	$contacts=$db->prepare('SELECT * FROM contact WHERE contact_id = :id');
		// 	$contacts->bindValue('id', $id);
		// 	$contacts->execute();

		// 	return $contacts;
		// }

		public function find($id)
		{
			$db = DataBase::conectar();
			$select=$db->prepare('SELECT * FROM contact WHERE id=:id');
			$select->bindValue('id', $id);
			$select->execute();
			$contact=$select->fetch();

			return $contact;
		}

		public function insert($contact)
		{	
			$db = DataBase::conectar();
			$insert=$db->prepare( 'INSERT INTO contact (company_id, contact_name, contact_address, contact_email, contact_phone) 
				values( :company_id, :contact_name, :contact_address, :contact_email, :contact_phone)' );
			$insert->bindValue('company_id', $contact->get_company_id());
			$insert->bindValue('contact_name', $contact->get_contact_name());
			$insert->bindValue('contact_address', $contact->get_contact_address());
			$insert->bindValue('contact_email', $contact->get_contact_email());
			$insert->bindValue('contact_phone', $contact->get_contact_phone());
			$insert->execute();
		}

		public function delete( $id ){
			$db = DataBase::conectar();
			$delete=$db->prepare( 'DELETE FROM contact WHERE id=:id' );
			$delete->bindValue( 'id', $id );
			$delete->execute();
		}

		public function update( $contact ){
			$db = DataBase::conectar();
			$update = $db->prepare('UPDATE contact SET company_id=:company_id, contact_name=:contact_name, contact_address=:contact_address, contact_email=:contact_email, contact_phone=:contact_phone WHERE id=:id');

			$update->bindValue('company_id', $contact->get_company_id());
			$update->bindValue('contact_name', $contact->get_contact_name());
			$update->bindValue('contact_address', $contact->get_contact_address());
			$update->bindValue('contact_email', $contact->get_contact_email());
			$update->bindValue('contact_phone', $contact->get_contact_phone());
			$update->execute();
		}

	}
 ?>