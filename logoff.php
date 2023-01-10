<?php
@session_start();
$_SESSION['logina'] = false;
$_SESSION['email'] = "";
// $_SESSION['a'] = false;
$_SESSION['msg'] = "" ;
header("location:home.php");
?>