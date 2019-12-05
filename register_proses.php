<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$enc = md5($password);

$query = mysqli_query($conn, "insert into admin(username,password) values ('$username', '$enc')");

if ($query) {
    echo "<script>alert('Login gagal ! Username atau Password Salah !');
    document.location.href='login.php'</script>";
}
?>