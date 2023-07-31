<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register | Menu</title>
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
              <h4>Register</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>

              <?php if (isset($_GET['alert'])): ?>
                <?php if($_GET['alert'] === '1'): ?>
                  <div class="alert alert-danger" role="alert">
                    Gagal melakukan register!
                  </div>
                <?php elseif($_GET['alert'] === '2'): ?>
                  <div class="alert alert-danger" role="alert">
                    Konfirmasi password dengan benar!
                  </div>
                  <?php endif; ?>
              <?php endif; ?>

              <form class="pt-3" action="auth/register.php" method="post">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="nama" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="c_password" placeholder="Konfirmasi Password" required>
                </div>
                <div class="form-group">
                  <textarea class="form-control form-control-lg" name="alamat" placeholder="Alamat Anda" rows="8" cols="80" required></textarea>
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN UP</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Sudah memiliki akun? <a href="login.php" class="text-primary">Login</a>
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
