<?php

// connect and set option
$path = $_SERVER['DOCUMENT_ROOT'] . "/";

require_once $path.'php/connect.php';

$airline_code = $_POST["airline_code"];

$sql = "DELETE FROM airline WHERE airline_code = '".$airline_code."';";

$db->query($sql);

?>

<?php include( $path . "views/flight_providers.php" ); ?>      
