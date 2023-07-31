<?php
session_start();
include '../../config/database.php';
ini_set('display_errors', 1);

$id_grooming = $_POST['id_grooming'];
$id_user = $_SESSION['pelanggan'];
$nama_p = $_POST['nama'];
$waktu_mulai = $_POST['mulai'];

$grooming = $connect->query("SELECT * FROM tb_grooming WHERE id_grooming=".$id_grooming)->fetch_object();

$harga = $grooming->harga_grooming;
$status_pembayaran = $_POST['pembayaran'];
$alamat = $_POST['alamat'];

if ($connect->query("INSERT INTO tb_dt_grooming(id_grooming, id_user, nama_pemesan, tanggal_masuk, total_bayar, jenis_bayar, status_bayar, status_diambil, alamat_ambil) VALUES('$id_grooming', '$id_user', '$nama_p', '$waktu_mulai', '$harga', '$status_pembayaran', '0', '0', '$alamat')")) {
  header("Location:../index.php?page=3");
} else {
  header("Location:../index.php?page=2&alert=1");
}

?>
