<?php
include '../../../config/database.php';
ini_set('display_errors', 1);

$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
$keterangan = $_POST['keterangan'];
$id = $_POST['id'];

if ($connect->query("UPDATE tb_grooming SET jenis_grooming='$jenis', harga_grooming='$harga', keterangan='$keterangan' WHERE id_grooming='$id'")) {
  header("Location:../../index.php?page=1&alert=1");
} else {
  header("Location:../../index.php?page=1&alert=2");
}
?>
