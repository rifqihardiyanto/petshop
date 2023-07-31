<?php
include '../../../config/database.php';
ini_set('display_errors', 1);

$id = $_GET['id'];

if ($connect->query("DELETE FROM tb_penitipan WHERE id_penitipan='$id'")) {
  header("Location:../../index.php?page=4&alert=1");
} else {
  header("Location:../../index.php?page=4&alert=2");
}
?>
