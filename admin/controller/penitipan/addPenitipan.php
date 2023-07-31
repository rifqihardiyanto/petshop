<?php
include '../../../config/database.php';
ini_set('display_errors', 1);

$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
$type = $_POST['type'];

if ($connect->query("INSERT INTO tb_penitipan(jenis_penitipan, harga_penitipan, status_penitipan) VALUES('$jenis', '$harga', '$type')")) {
  header("Location:../../index.php?page=3&alert=1");
} else {
  header("Location:../../index.php?page=3&alert=2");
}
?>
