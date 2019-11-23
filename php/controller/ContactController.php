<?php

//incluye la clase Contact y ContactCrud
include '../model/crud/ContactCrud.php';
include '../model/Contact.php';
 
// Instancias de las clases ContactCrud y Contact
$contact_crud = new ContactCrud();
$contact = new Contact();
 
	// Si el elemento insertar no viene nulo llama al ContactCrud e inserta un Contact, 
	// login viene del indicador en el formulario
	if ( isset( $_POST['create'] ) ) {

		$contact->set_contact_name( $_POST['contact_name'] );
		$contact->set_contact_address( $_POST['contact_address'] );
		$contact->set_contact_email( $_POST['contact_email'] );
		$contact->set_contact_phone( $_POST['contact_phone'] );
		$contact->set_company_id( $_POST['company_id'] );

		//llama a la función insert definida en el ContactCrud
		$contact_crud->insert( $contact );

		header('Location: ../../resources/views/contact/index.php?alert=create_ok');
	}
	else if ( isset( $_POST['delete'] ) ) {
		$contact_crud->delete($_POST['delete']);

		header('Location: ../../resources/views/contact/index.php?alert=delete_ok');
	}

	else if ( isset( $_POST['update'] ) ) {

        //$contact->set_id( $_POST['update'] );
        $contact->set_company_id( $_POST['company_id'] );
		$contact->set_contact_name( $_POST['contact_name'] );
		$contact->set_contact_address( $_POST['contact_address'] );
		$contact->set_contact_email( $_POST['contact_email'] );
		$contact->set_contact_phone( $_POST['contact_phone'] );

		//llama a la función insert definida en el ContactCrud
		$contact_crud->update( $contact );

		header('Location: ../../resources/views/contact/index.php?alert=update_ok');
	}

?>