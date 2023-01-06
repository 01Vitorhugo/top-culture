<?php
@session_start();
unset($_SESSION['login']);

header("location:home.php");
?>