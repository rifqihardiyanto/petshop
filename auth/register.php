<?php
session_start();
ob_start();
include '../config/database.php';
require '../library/aes.class.php';     // AES PHP implementation
require '../library/aesctr.class.php';  // AES Counter Mode implementation


$r_password = $_POST['password'];
$c_password = $_POST['c_password'];

#jika password tidak sama
if($r_password !== $c_password){
  header("Location:../register.php?alert=2");
} else {
  # enkripsi data
  $nama = AesCtr::encrypt($_POST['nama'], 'rifqi', 128);
  $username = AesCtr::encrypt($_POST['username'], 'rifqi', 128);
  $password =  AesCtr::encrypt($r_password, 'rifqi', 128);
  $alamat =  AesCtr::encrypt($_POST['alamat'], 'rifqi', 128);

  if ($connect->query("INSERT INTO tb_user(nama_user, username, password, alamat) VALUES('$nama', '$username', '$password', '$alamat')")) {
      header("Location:../login.php?alert=1");
  } else {
      header("Location:../register.php?alert=1");
  }
}

?>
