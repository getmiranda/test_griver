<?php
include '../../../php/model/crud/CompanyCrud.php';

$company_crud = new CompanyCrud();
$company = $company_crud->find($_POST['id']);
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
            Catálogo de Empresas
          </li>
        </ol>

        <div class="card card-register mx-auto mt-5">
      <div class="card-header">
          Update a Company
          <a href="index.php" class="btn btn-sm btn-primary fa-pull-right">
            Back
          </a>
      </div>
      <div class="card-body">
        <form action="../../../php/controller/CompanyController.php" method="POST">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="company_name" name="company_name" class="form-control" placeholder="Company Name" required="required" autofocus="autofocus" value="<?php echo $company['company_name'] ?>">
                  <label for="company_name">Company Name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="company_rfc" name="company_rfc" class="form-control" placeholder="RFC" required="required" value="<?php echo $company['company_rfc'] ?>">
                  <label for="company_rfc">RFC</label>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-8">
                <div class="form-label-group">
                  <input type="text" id="company_address" name="company_address" class="form-control" placeholder="Address" required="required" autofocus="autofocus" value="<?php echo $company['company_address'] ?>">
                  <label for="company_address">Address</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="text" id="company_country" name="company_country" class="form-control" placeholder="Country" required="required" value="<?php echo $company['company_country'] ?>">
                  <label for="company_country">Country</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="business_stream" name="business_stream" class="form-control" placeholder="Bussiness Stream" required="required" value="<?php echo $company['business_stream'] ?>">
                  <label for="business_stream">Bussiness Stream</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="company_website_url" name="company_website_url" class="form-control" placeholder="Web URL" required="required" value="<?php echo $company['company_website_url'] ?>">
                  <label for="company_website_url">Web URL</label>
                </div>
              </div>
            </div>
          </div>
          <input type='hidden' name='update' value='<?php echo $company['id'] ?>'>
          <input class="btn btn-primary btn-block" type="submit" value="Update">
          <!-- <a class="btn btn-primary btn-block" href="login.html">Register</a> -->
        </form>
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
