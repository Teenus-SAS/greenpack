<?php
// require dirname(dirname(__DIR__)) . "/dao/MaterialDao.php";
include("../../partials/verify-session.php");
// $materialDao = new MaterialDao();
// $materials = $materialDao->findAll();
?>
<!-- author: Alexis Holguin, github: MoraHol -->
<!doctype html>
<html lang="es">

<head>
  <title>Textos | GreenPack</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="../../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <link rel="stylesheet" href="/css/all.min.css">
  <!-- Page level plugin CSS-->
  <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <style>
    td.highlight {
      background-color: whitesmoke !important;
    }

    .card-body .fas {
      font-size: 4rem;
    }
  </style>
</head>

<body class="white-edition">
  <div class="wrapper ">
    <?php include("../../partials/sidebar.php"); ?>
    <div class="main-panel">
      <?php include("../../partials/navbar.php");  ?>
      <div class="content">
        <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="/admin">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
              <a href="/admin/texts">Textos</a>
            </li>
            <li class="breadcrumb-item active">Acerca de Nosotros</li>
          </ol>
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Acerca de Nosotros</div>
            <div class="card-body">

            </div>
          </div>
        </div>
        <?php include("../../partials/footer.html"); ?>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="/js/jquery-2.2.4.min.js"></script>
    <script src="../../assets/js/core/popper.min.js"></script>
    <script src="../../assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="https://unpkg.com/default-passive-events"></script>
    <script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Chartist JS -->
    <script src="../../assets/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../assets/js/material-dashboard.js?v=2.1.0"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="../../assets/demo/demo.js"></script>
    <script src="../../assets/js/script.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="/vendor/jquery.formatCurrency-1.4.0.min.js"></script>
    <script src="/vendor/jquery.formatCurrency.all.js"></script>
    <script>
      $('.sidebar div.sidebar-wrapper ul.nav li:first').removeClass('active')
      $('#text-item').addClass('active')
    </script>
</body>

</html>