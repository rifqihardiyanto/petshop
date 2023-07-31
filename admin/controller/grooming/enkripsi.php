<?php
include '../../../config/database.php';
require '../../../library/aes.class.php';     // AES PHP implementation
require '../../../library/aesctr.class.php';  // AES Counter Mode implementation

ini_set('display_errors', 1);

$key = $_POST['password'];

if ($connect->query("UPDATE tb_dt_grooming SET enkripsi='1', aes_key='$key'")) {

  $grooming = $connect->query("SELECT * FROM tb_dt_grooming");

  while ($value = $grooming->fetch_object()) {
    $nama = AesCtr::encrypt($value->nama_pemesan, $key, 128);

    $connect->query("UPDATE tb_dt_grooming SET nama_pemesan='$nama' WHERE id_dt_grooming = '$value->id_dt_grooming'");
  }

  header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
  header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>
