<?php
include '../../../config/database.php';
ini_set('display_errors', 1);

$id = $_GET['id'];

if ($connect->query("UPDATE tb_dt_grooming SET status_diambil='1' WHERE id_dt_grooming='$id'")) {
  header("Location:../../index.php?page=6&alert=1");
} else {
  header("Location:../../index.php?page=6&alert=2");
}
?>
