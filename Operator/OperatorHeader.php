<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Sipaka</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="logo.png" width="100px" />
</head>

<body id="page-top" onload="setInterval('displayTime()', 1000);">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index2.php">
        <div class="sidebar-brand-icon">
          <!-- <i class="fas fa-laugh-wink"></i> -->
          <img src="logo.png" alt="" width="50px" />
        </div>
        <div class="sidebar-brand-text mx-3">SISTEM PENGADAAN KERETA API</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0" />

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <!-- Nav Item - Profil -->
      <li class="nav-item active">
        <a class="nav-link" href="profil.php">
          <i class="far fa-user-circle"></i>
          <span>Profil</span></a>
      </li>
      <!-- Nav Item - Persetujuan -->
      <li class="nav-item active">
        <a class="nav-link" href="tambahan.php">
          <i class="fas fa-pencil-alt"></i>
          <span>Data Kereta Tambahan</span></a>
      </li>
      <!-- Nav Item - Operator -->
      <li class="nav-item active">
        <a class="nav-link" href="operator.php">
          <i class="fas fa-cogs"></i>
          <span>Operator</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block" />
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">
          <i class="fas fa-sign-out-alt"></i>
          <span>Log Out</span></a>
      </li>
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
      <!-- Sidebar Message -->
      <!-- Fungsi Jam -->
      <script>
        function displayTime() {
          var i = new Date();
          var time = new Date(i.getTime());
          var j = time.getHours().toString();
          var m = time.getMinutes().toString();
          var d = time.getSeconds().toString();
          document.getElementById("jam").innerHTML = (j.length == 1 ? "0" + j : j) + ":" + (m.length == 1 ? "0" + m : m);
        }
      </script>
      <?php
      function hariIndo($hariInggris)
      {
        switch ($hariInggris) {
          case 'Sunday':
            return 'Minggu';
          case 'Monday':
            return 'Senin';
          case 'Tuesday':
            return 'Selasa';
          case 'Wednesday':
            return 'Rabu';
          case 'Thursday':
            return 'Kamis';
          case 'Friday':
            return 'Jumat';
          case 'Saturday':
            return 'Sabtu';
          default:
            return 'hari tidak valid';
        }
      }
      date_default_timezone_set("Asia/Jakarta");
      $hariBahasaInggris = date('l');
      $hariBahasaIndonesia = hariIndo($hariBahasaInggris);
      ?>
      <div class="sidebar-card d-lg-flex">
        <h2> <?php echo $hariBahasaIndonesia; ?></h2>
        <h4 class="fs-5"><?php echo date("d m Y"); ?></h1>
          <h3 class="fs-1" id="jam">
            </h1>
      </div>
      <!-- Sidebar Message -->
      <!-- <div class="sidebar-card d-none d-lg-flex">
          <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="..." />
          <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
          <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
        </div> -->
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
              <div class="input-group-append">
                <button class="btn btn-success" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                      <button class="btn btn-success" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            </li>


            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Halo, Operator</span>
                <i class="fas fa-user fa-2x text-gray-300"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../index.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <!-- Begin Page Content -->
        <div class="container-fluid">