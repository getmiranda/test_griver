<?php 

if( isset($_GET['alert']) ) {

	if ($_GET['alert'] == "create_ok") {
        echo('<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>¡Éxito!</strong> Se ha resistrado correctamente.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
	}

	if ($_GET['alert'] == "delete_ok") {
        echo('<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>¡Éxito!</strong> Se ha eliminado correctamente.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
    }
    
    if ($_GET['alert'] == "update_ok") {
        echo('<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>¡Éxito!</strong> Se ha actualizado correctamente.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
	}

}

?>