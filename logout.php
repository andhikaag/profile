<?php 
session_start();

session_destroy();

echo "<script>alert('Anda telah Logout !');
    document.location.href='login.php'</script>";
?>