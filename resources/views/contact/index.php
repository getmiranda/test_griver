<?php
include '../../../php/model/crud/ContactCrud.php';

$contact_crud = new ContactCrud();
$contacts = $contact_crud->all();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Test GRIVER</title>

  <!-- Custom fonts for this template-->
  <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../../css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="../index.php">GRIVER</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="../index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../company/">
          <i class="fas fa-fw fa-table"></i>
          <span>Companies</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../contact/">
          <i class="fas fa-fw fa-table"></i>
          <span>Contacs</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../monitor/">
          <i class="fas fa-fw fa-table"></i>
          <span>Monitor</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            Catálogo de Contactos
          </li>
        </ol>

        <?php include("../../alerts/alerts.php") ?>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Tabla Contactos
            <a href="create.php" class="btn btn-sm btn-primary fa-pull-right">
                New
            </a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Company ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Company ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone</th>
                  </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($contacts->fetchAll() as $contact) {?>
                        <tr>
                            <td><?php echo $contact['company_id'] ?></td>
                            <td><?php echo $contact['contact_name'] ?></td>
                            <td><?php echo $contact['contact_address'] ?></td>
                            <td><?php echo $contact['contact_email'] ?></td>
                            <td><?php echo $contact['contact_phone'] ?></td>
                        </tr>
                    <?php }?>
                </tbody>
              </table>
            </div>
          </div>
        </div>



      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



  <!-- Bootstrap core JavaScript-->
  <script src="../../../vendor/jquery/jquery.min.js"></script>
  <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../../../vendor/chart.js/Chart.min.js"></script>
  <script src="../../../vendor/datatables/jquery.dataTables.js"></script>
  <script src="../../../vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../../js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../../../js/demo/datatables-demo.js"></script>
  <script src="../../../js/demo/chart-area-demo.js"></script>

</body>

</html>
