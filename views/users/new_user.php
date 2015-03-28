<?php

$email = $_POST["email"];
$password = $_POST["password"];
$authentication = 'token';
$admin = 1;

$path = $_SERVER['DOCUMENT_ROOT'] . "/";

require_once ($path . 'php/connect.php');

$sql = "INSERT into website_user Values('".$email."', '".$password."', '".$authentication."', '".$admin."')";
$result = $db->query($sql);

header ('Location: ' . '/index.php');

?>
