<?php
session_start();
/// to logout of the current session
include($_SERVER['DOCUMENT_ROOT']."/auth/passwords.php"); 
logout();
/// redirect to readblogs.php
header("Location: ../views/index.php"); 
?>