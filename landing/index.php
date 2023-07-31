<?php
session_start();
include '../config/database.php';
include '../config/database.php';
require '../library/aes.class.php';     // AES PHP implementation
require '../library/aesctr.class.php';  // AES Counter Mode implementation


if (isset($_SESSION['pelanggan'])) {
  $pelanggan = $connect->query("SELECT * FROM tb_user WHERE id_user=".$_SESSION['pelanggan'])->fetch_object();
}

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>Home</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="../vendor/landing/images/favicon.png" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="../vendor/landing/plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="../vendor/landing/plugins/icofont/icofont.min.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="../vendor/landing/plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="../vendor/landing/plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="../vendor/landing/css/style.css">

</head>

<body id="top">

  <?php include 'templates/v_navbar.php'; ?>


  <?php
  if (!isset($_GET['page'])){
    include 'views/v_dashboard.php';
  } elseif ($_GET['page'] == 0) {
    include 'views/v_dashboard.php';
  } elseif ($_GET['page'] == 1) {
    include 'views/v_penitipan.php';
  } elseif ($_GET['page'] == 2) {
    include 'views/v_grooming.php';
  } elseif ($_GET['page'] == 3) {
    include 'views/v_history.php';
  } elseif ($_GET['page'] == 4) {
    include 'views/uploadPenitipan.php';
  } elseif ($_GET['page'] == 5) {
    include 'views/uploadGrooming.php';
  }
  ?>


  <?php include 'templates/v_footer.php'; ?>

  <!-- Main jQuery -->
  <script src="../vendor/landing/plugins/jquery/jquery.js"></script>
  <!-- Bootstrap 4.3.2 -->
  <script src="../vendor/landing/plugins/bootstrap/js/popper.js"></script>
  <script src="../vendor/landing/plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="../vendor/landing/plugins/counterup/jquery.easing.js"></script>
  <!-- Slick Slider -->
  <script src="../vendor/landing/plugins/slick-carousel/slick/slick.min.js"></script>
  <!-- Counterup -->
  <script src="../vendor/landing/plugins/counterup/jquery.waypoints.min.js"></script>

  <script src="../vendor/landing/plugins/shuffle/shuffle.min.js"></script>
  <script src="../vendor/landing/plugins/counterup/jquery.counterup.min.js"></script>
  <!-- Google Map -->
  <script src="../vendor/landing/plugins/google-map/map.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

  <script src="../vendor/landing/js/script.js"></script>
  <script src="../vendor/landing/js/contact.js"></script>

</body>
</html>
