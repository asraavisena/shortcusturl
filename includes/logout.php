<?php
session_start();
$_SESSION['username'] = null;

header("Location:../login_page.php");
?>