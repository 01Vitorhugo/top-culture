<?php
@session_start();
unset($_SESSION['login']);
$_SESSION['email'] = "";

header("location:home.php");
?>