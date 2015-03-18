<?php 
// connect and set option
putenv("ORACLE_HOME=/oraclient");
$dbh = ocilogon('cs2102t01', 'crse1420', ' (DESCRIPTION =
    (ADDRESS_LIST =
      (ADDRESS = (PROTOCOL = TCP)(HOST = sid3.comp.nus.edu.sg)(PORT = 1521))
    )
    (CONNECT_DATA =
      (SERVICE_NAME = sid3.comp.nus.edu.sg)
    )
  )');

$sql = 'SELECT email, password
		FROM website_user ';
$sth = oci_parse($dbh, $sql);
oci_execute($sth, OCI_DEFAULT);
 
if(! $sth )
{
  die('Could not fetch data: ' . mysql_error());
}
while($row = oci_fetch_array($sth))
{
	$USERS[$row[0]] = $row[1];
}
  
function check_logged(){ 
	/// checks if a valid user has logged into the system, otherwise redirects to login page 
     global $_SESSION, $USERS; 
     if (!array_key_exists($_SESSION["logged"],$USERS)) { 
          header("Location: ".$_SERVER['DOCUMENT_ROOT']."auth/login.php"); 
     }; 
 }
function is_user(){
	/// returns true if a valid user has logged into the system, otherwise returns false
	global $_SESSION, $USERS; 
	return array_key_exists("logged",$_SESSION) && array_key_exists($_SESSION["logged"],$USERS);
}
function logout(){
	/// logs out of the system by un-setting the "logged" attribute of the $_SESSION array
	global $_SESSION, $USERS; 
	unset($_SESSION["logged"]);
	echo 'You have logged out';
}
?>