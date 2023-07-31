<?php
include '../../../config/database.php';


$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
$keterangan = $_POST['keterangan'];

if ($connect->query("INSERT INTO tb_grooming(jenis_grooming, harga_grooming, keterangan) VALUES('$jenis', '$harga', '$keterangan')")) {
  header("Location:../../index.php?page=1&alert=1");
} else {
  header("Location:../../index.php?page=1&alert=2");
}
?>
