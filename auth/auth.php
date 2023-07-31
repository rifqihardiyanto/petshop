<?php
session_start();
ob_start();
include '../config/database.php';
require '../library/aes.class.php';     // AES PHP implementation
require '../library/aesctr.class.php';  // AES Counter Mode implementation
ini_set('display_errors', 0);

$username = $_POST['username'];
$password = $_POST['password'];

$setUser = $connect->query("SELECT * FROM tb_user");

while ($user = $setUser->fetch_object()) {
    $tmp_username = AesCtr::decrypt($user->username, 'rifqi', 128);

    if($tmp_username == $username){
      $id_user = $user->id_user;
      $name = $user->nama_user;
      $us_password = $user->password;
    }
}

#check users
if ($id_user == null) {
  $admin = $connect->query("SELECT * FROM tb_admin WHERE username='$username'")->fetch_object();

  if ($password == AesCtr::decrypt($admin->password, 'rifqi', 128)) {
    $_SESSION['id_user'] = $admin->id_admin;
    
    header("Location:../admin/index.php?page=0");
  } else {
    header("Location:../login.php?alert=2");
  }
} else {
  if ($password == AesCtr::decrypt($us_password, 'rifqi', 128)) {
    $_SESSION['pelanggan'] = $id_user;
    $_SESSION['name'] = AesCtr::decrypt($name, 'rifqi', 128);
    
    header("Location:../landing/index.php?page=0");
  } else {
    header("Location:../login.php?alert=2");
  }
}
?>
