<?php
include '../../../config/database.php';
ini_set('display_errors', 1);

$id = $_GET['id'];

if ($connect->query("DELETE FROM tb_grooming WHERE id_grooming='$id'")) {
  header("Location:../../index.php?page=2&alert=1");
} else {
  header("Location:../../index.php?page=2&alert=2");
}
?>
