<?php
include '../../../php/model/crud/ContactCrud.php';
include '../../../php/model/crud/CompanyCrud.php';

$contact_crud = new ContactCrud();
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
            Catálogo de Contactos
          </li>
        </ol>

        <div class="card card-register mx-auto mt-5">
      <div class="card-header">
          Register a Contact
          <a href="index.php" class="btn btn-sm btn-primary fa-pull-right">
            Back
          </a>
      </div>
      <div class="card-body">
        <form action="../../../php/controller/ContactController.php" method="POST">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="contact_name">Contact Name</label>
                  <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Contact Name" required="required" autofocus="autofocus">
                </div>
              </div>
              <div class="form-group col-md-4">
                <label for="company_id">Company</label>
                <select id="company_id" name="company_id" class="form-control">
                  <option selected>Company...</option>
                  <?php foreach ($companies as $company) {?>
                    <option value="<?php echo $company['id'] ?>"><?php echo $company['company_name'] ?></option>
                  <?php }?>
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                  <input type="text" id="contact_address" name="contact_address" class="form-control" placeholder="Address" required="required" autofocus="autofocus">
                  <label for="contact_address">Address</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="contact_email" name="contact_email" class="form-control" placeholder="Email" required="required">
                  <label for="contact_email">Email</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="contact_phone" name="contact_phone" class="form-control" placeholder="Phone" required="required">
                  <label for="contact_phone">Phone</label>
                </div>
              </div>
            </div>
          </div>
          <input type='hidden' name='create' value='create'>
          <input class="btn btn-primary btn-block" type="submit" value="Register">
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
