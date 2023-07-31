<?php
session_start();
ini_set('display_errors', 0);
ob_start();
include '../config/database.php';
require '../library/aes.class.php';     // AES PHP implementation
require '../library/aesctr.class.php';  // AES Counter Mode implementation

$account = $connect->query("SELECT * FROM tb_admin WHERE id_admin=".$_SESSION['id_user'])->fetch_object();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin | Dashboard</title>

  <?php include("templates/v_head.php"); ?>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include("templates/v_navbar.php"); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <?php include 'templates/v_sidebar.php'; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <?php if (!isset($_GET['page'])){
            header("Location:../login.php", true);
          } elseif ($_GET['page'] == 0) {
            include('views/v_dashboard.php');
          } elseif ($_GET['page'] == 1) {
            include('views/v_addGrooming.php');
          } elseif ($_GET['page'] == 2) {
            include('views/v_listGrooming.php');
          } elseif ($_GET['page'] == 3) {
            include('views/v_addPenitipan.php');
          } elseif ($_GET['page'] == 4) {
            include('views/v_listPenitipan.php');
          } elseif ($_GET['page'] == 5) {
            include('views/v_riwayatPenitipan.php');
          } elseif ($_GET['page'] == 6) {
            include('views/v_riwayatGrooming.php');
          } elseif ($_GET['page'] == 7) {
            include('views/v_lapPenitipan.php');
          } elseif ($_GET['page'] == 8) {
            include('views/v_lapGrooming.php');
          } elseif ($_GET['page'] == 9) {
            include('views/v_profil.php');
          }

          ?>

        </div>
        <!-- content-wrapper ends -->

        <?php include("templates/v_footer.php"); ?>
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <?php include("templates/v_js.php"); ?>
</body>
</html>
