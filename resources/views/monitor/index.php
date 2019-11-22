<?php
include '../../../php/model/crud/CompanyCrud.php';

$company_crud = new CompanyCrud();
$companies = $company_crud->companies();
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
            Catálogo de Contactos por Empresa
          </li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Tabla Empresa</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Bussiness Stream</th>
                    <th>Web URL</th>
                    <th></th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Bussiness Stream</th>
                    <th>Web URL</th>
                    <th></th>
                  </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($companies as $company) {?>
                        <tr>
                            <td><?php echo $company['company_name'] ?></td>
                            <td><?php echo $company['company_address'] ?></td>
                            <td><?php echo $company['business_stream'] ?></td>
                            <td><?php echo $company['company_website_url'] ?></td>
                            <td align="center">
                              <form action="show.php" method="post">
                                <input type='hidden' name='id' value='<?php echo $company['id']?>'>
                                <input class="btn btn-primary" type="submit" value="Ver Contactos">
                              </form>
                            </td>
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
