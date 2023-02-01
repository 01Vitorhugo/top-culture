<?php
@session_start();
$_SESSION['login'] = false;
$_SESSION['email'] = "";
// $_SESSION['a'] = false;
$_SESSION['msg'] = "" ;
header("location:error.php");
?>