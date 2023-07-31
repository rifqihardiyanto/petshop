<?php
include '../../../config/database.php';
require '../../../library/aes.class.php';     // AES PHP implementation
require '../../../library/aesctr.class.php';  // AES Counter Mode implementation

ini_set('display_errors', 1);

$key = $_POST['password'];

$verify = $connect->query("SELECT * FROM tb_dt_grooming")->fetch_object();

if ($verify->aes_key == $key) {
  if ($connect->query("UPDATE tb_dt_grooming SET enkripsi='0', aes_key='null'")) {

    $grooming = $connect->query("SELECT * FROM tb_dt_grooming");

    while ($value = $grooming->fetch_object()) {
      $nama = AesCtr::decrypt($value->nama_pemesan, $key, 128);

      $connect->query("UPDATE tb_dt_grooming SET nama_pemesan='$nama' WHERE id_dt_grooming = '$value->id_dt_grooming'");
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);
  } else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
} else {
  header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>
