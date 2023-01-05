<?php
@session_start();
unset($_SESSION['']);

header("location:home.php");
?>