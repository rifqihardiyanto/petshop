<?php
include '../../../config/database.php';
ini_set('display_errors', 1);

$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
$type = $_POST['type'];
$id = $_POST['id'];

if ($connect->query("UPDATE tb_penitipan SET jenis_penitipan='$jenis', harga_penitipan='$harga', status_penitipan='$type' WHERE id_penitipan='$id'")) {
  header("Location:../../index.php?page=3&alert=1");
} else {
  header("Location:../../index.php?page=3&alert=2");
}
?>
