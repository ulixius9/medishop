<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['uid']);
echo "<script>alert('Logged out sucessfully');window.location='index.php';</script>";
?>