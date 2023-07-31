<?php
session_start();
include '../../config/database.php';

$id_penitipan = $_POST['id_penitipan'];
$id_user = $_SESSION['pelanggan'];
$nama_p = $_POST['nama'];
$waktu_mulai = $_POST['mulai'];
$waktu_ambil = $_POST['selesai'];

$penitipan = $connect->query("SELECT * FROM tb_penitipan WHERE id_penitipan=".$id_penitipan)->fetch_object();

$tgl1 = new DateTime($waktu_mulai);
$tgl2 = new DateTime($waktu_ambil);
$lama = $tgl2->diff($tgl1);

$harga = $penitipan->harga_penitipan*$lama->d;
$status_pembayaran = $_POST['pembayaran'];
$alamat = $_POST['alamat'];

if ($connect->query("INSERT INTO tb_dt_penitipan(id_penitipan, id_user, nama_penitip, waktu_penitipan, waktu_keluar, total_bayar, status_pembayaran, status_diambil, status_bayar, alamat_ambil) VALUES('$id_penitipan', '$id_user', '$nama_p', '$waktu_mulai', '$waktu_ambil', '$harga', '$status_pembayaran', '0', '0', '$alamat')")) {
  header("Location:../index.php?page=3");
} else {
  header("Location:../index.php?page=1&alert=1");
}

?>
