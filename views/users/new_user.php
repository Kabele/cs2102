<?php

$email = $_POST["email"];
$password = $_POST["password"];
$authentication = 'token';
$admin = 1;

$path = $_SERVER['DOCUMENT_ROOT'] . "/";

require_once ($path . 'php/connect.php');

$sql = "INSERT into website_user Values('".$email."', '".$password."', '".$authentication."', '".$admin."')";
$result = $db->query($sql);



///header ('Location: ' . '/auth/login.php?ac=log&email=' . $email . '&password=' .$password); 
?>

<html>
	<form name='redirect' action='/auth/login.php' method='POST'>
		<input type='hidden' name='ac' value='log'>
		<input type='hidden' name='email' value='<?php echo $email; ?>'>
		<input type='hidden' name='password' value='<?php echo $password; ?>'>
		<input type='submit' value='Proceed'>
	</form>

<script type='text/javascript'>
document.redirect.submit();
</script>
</html>