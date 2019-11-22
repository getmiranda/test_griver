<?php

//incluye la clase Company y CompanyCrud
include '../model/crud/CompanyCrud.php';
include '../model/Company.php';
 
// Instancias de las clases CompanyCrud y Company
$company_crud = new CompanyCrud();
$company = new Company();
 
	// Si el elemento insertar no viene nulo llama al CompanyCrud e inserta un Company, 
	// login viene del indicador en el formulario
	if ( isset( $_POST['create'] ) ) {

		$company->set_company_name( $_POST['company_name'] );
		$company->set_company_rfc( $_POST['company_rfc'] );
		$company->set_company_address( $_POST['company_address'] );
		$company->set_business_stream( $_POST['business_stream'] );
		$company->set_company_website_url( $_POST['company_website_url'] );
		$company->set_company_country( $_POST['company_country'] );

		//llama a la función insert definida en el CompanyCrud
		$company_crud->insert( $company );

		header('Location: ../views/company/index.php?msj=registrop_OK');
	}

	else if ( isset( $_POST['update'] ) ) {

		$company->set_company_name( $_POST['company_name'] );
		$company->set_company_rfc( $_POST['company_rfc'] );
		$company->set_company_address( $_POST['company_address'] );
		$company->set_business_stream( $_POST['business_stream'] );
		$company->set_company_website_url( $_POST['company_website_url'] );
		$company->set_company_country( $_POST['company_country'] );

		//llama a la función insert definida en el CompanyCrud
		$company_crud->update( $company );

		header('Location: ../view/admin/tabla2.php?msj=update_OK');
	}

	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un company
	else if ($_GET['accion']=='e') {
		$company_crud->delete($_GET['id']);
		header('Location: ../view/admin/tabla2.php?msj=delete_OK');	
	}
?>