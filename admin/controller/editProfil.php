<?php
session_start();
include '../../config/database.php';
ini_set('display_errors', 1);

$id = $_SESSION['id_user'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$pass = $_POST['pass'];

if ($connect->query("UPDATE tb_admin SET nama_admin='$nama', username='$username', password='$pass' WHERE id_admin='$id'")) {
  header("Location:../index.php?page=9&alert=1");
} else {
  header("Location:../index.php?page=9&alert=2");
}
?>
