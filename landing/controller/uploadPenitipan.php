<?php
include '../../config/database.php';
ini_set('display_errors', 1);

$id = $_POST['id'];

$ekstensi_diperbolehkan	= array('png','jpg');
$nama = $_FILES['bukti']['name'];
$x = explode('.', $nama);
$ekstensi = strtolower(end($x));
$ukuran	= $_FILES['bukti']['size'];
$file_tmp = $_FILES['bukti']['tmp_name'];

if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){

  if (move_uploaded_file($file_tmp, '../../bukti/'.$nama)) {
    if ($connect->query("UPDATE tb_dt_penitipan SET bukti_bayar='$nama', status_bayar='1' WHERE id_dt_penitipan='$id'")) {
      header('Location:../index.php?page=3');
    } else {
      header('Location:../index.php?page=3&alert=1');
    }
  } else {
    echo "gagal upload";
  }

}else{
  header('Location:../index.php?page=3&alert=1');
}
?>
