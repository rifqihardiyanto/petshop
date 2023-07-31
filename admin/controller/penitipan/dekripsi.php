<?php
include '../../../config/database.php';
require '../../../library/aes.class.php';     // AES PHP implementation
require '../../../library/aesctr.class.php';  // AES Counter Mode implementation

ini_set('display_errors', 1);

$key = $_POST['password'];

$verify = $connect->query("SELECT * FROM tb_dt_penitipan")->fetch_object();

if ($verify->aes_key == $key) {
  if ($connect->query("UPDATE tb_dt_penitipan SET enkripsi='0', aes_key='null'")) {

    $dek = $connect->query("SELECT * FROM tb_dt_penitipan");
    while ($value = $dek->fetch_object()) {
      $nama = AesCtr::decrypt($value->nama_penitip, $key, 128);

      $connect->query("UPDATE tb_dt_penitipan SET nama_penitip='$nama' WHERE id_dt_penitipan = '$value->id_dt_penitipan'");
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);
  } else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
} else {
  header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>
