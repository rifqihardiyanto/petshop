<?php
include '../../../config/database.php';
ini_set('display_errors', 1);

$id = $_GET['id'];

if ($connect->query("UPDATE tb_dt_penitipan SET status_bayar='1' WHERE id_dt_penitipan='$id'")) {
  header("Location:../../index.php?page=5&alert=1");
} else {
  header("Location:../../index.php?page=5&alert=2");
}
?>
