<?php 
session_start();
include "koneksi.php";
include "queryUser.php";

// Jika form login di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nip = $_POST["nip"];
  $password = $_POST["password"];
  
  // Mengambil data user dari database berdasarkan NIP
  $sql = "SELECT * FROM user WHERE nip = '$nip'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Jika password benar
    if ($password == $row["password"]) {
      $_SESSION["nama"] = $row["nama"];
      $_SESSION["role"] = $row["role"];
      // Mengarahkan ke halaman yang sesuai dengan role user
      if ($_SESSION["role"] == "Admin" OR $_SESSION["role"] == "admin") {
        header("Location: Admin/index2.php");
      } else if ($_SESSION["role"] == "Operator" OR $_SESSION["role"] == "operator") {
        header("Location: Operator/index.php");
      }
    } else {
      echo "Password salah";
    }} else {
      echo "NIP tidak ditemukan";
    }
    $conn->close();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Halaman Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <link rel="shortcut icon" href="logo.png" width="100px" />
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
  </head>

  <body class="bg-primary">
    <nav class="navbar navbar-expand navbar-light bg-primary topbar mb-4 static-top shadow">
      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>

      <!-- Topbar Search -->
      <img src="sipaka.png" width="150px" alt="" />

      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">
        <img src="logo.png" width="100px" alt="" />
        <!-- <div class="topbar-divider d-none d-sm-block"></div> -->
      </ul>
    </nav>
    <div class="container">
      <!-- Outer Row -->
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-12">
          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">SELAMAT DATANG</h1>
                    </div>
                    <form class="user" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nama" name="nip" placeholder="masukkan NIP"/>
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="masukkan password"/>
                      </div>

                      <input href="" type="submit" value="login" class="btn btn-primary btn-user btn-block">
                      <center><a href="https://drive.google.com/drive/folders/1vRbeZJawT7_2RwzZ7Qo2UqPMimHb_ans?usp=sharing"></a></center>
                      <!-- <a href="index.html" class="btn btn-google btn-user btn-block"> <i class="fab fa-google fa-fw"></i> Login with Google </a>
                      <a href="index.html" class="btn btn-facebook btn-user btn-block"> <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook </a> -->
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
  </body>
</html>