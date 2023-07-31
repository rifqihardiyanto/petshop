<?php

session_start();
session_unset();
session_destroy();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login | Menu</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendor/vendors/typicons.font/font/typicons.css">
  <link rel="stylesheet" href="vendor/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="vendor/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="vendor/images/favicon.png" />

</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="vendor/images/logo.png" alt="logo">
              </div>
              <h4>Login</h4>
              <h6 class="font-weight-light">Lakukan login untuk melakukan transaksi.</h6>

              <?php if (isset($_GET['alert'])): ?>
                <?php if ($_GET['alert']==1): ?>
                  <div class="alert alert-success" role="alert">
                    Berhasil melakukan register, silakan login!
                  </div>
                <?php else: ?>
                  <div class="alert alert-danger" role="alert">
                    Password/Username Salah!
                  </div>
                <?php endif; ?>
              <?php endif; ?>

              <form class="pt-3" action="auth/auth.php" method="post">
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-lg" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn text-white" type="submit">SIGN IN</button>
                </div>

                <div class="text-center mt-4 font-weight-light">
                  Belum memiliki akun? <a href="register.php" class="text-primary">Create</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  <a href="index.php" class="text-primary">Ke Halaman Utama</a>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="vendor/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="vendor/js/off-canvas.js"></script>
  <script src="vendor/js/hoverable-collapse.js"></script>
  <script src="vendor/js/template.js"></script>
  <script src="vendor/js/settings.js"></script>
  <script src="vendor/js/todolist.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="vendor/vendors/progressbar.js/progressbar.min.js"></script>
  <script src="vendor/vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="vendor/js/dashboard.js"></script>
  <!-- End custom js for this page-->

</body>

</html>
