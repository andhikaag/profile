<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query_cek = mysqli_query($conn, "select * from admin where username='$username' and password='$password'");

$data = mysqli_num_rows($query_cek);

if($data > 0){
   $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";

    echo "<script>alert('Berhasil Login !');
    document.location.href='index.php'</script>";
}else{
    echo "<script>alert('Login gagal ! Username atau Password Salah !');
    document.location.href='login.php'</script>";
}
?>