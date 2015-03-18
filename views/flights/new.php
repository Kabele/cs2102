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

$flight_id = $_POST["flight_id"];
$departure = $_POST["departure"];
$arrival = $_POST["arrival"];
$departure_date = $_POST["departure_date"];
$arrival_date = $_POST["arrival_date"];
$passenger_limit = $_POST["passenger_limit"];
$status = $_POST["status"];
$status_changed_by = $_POST["status_changed_by"];
$price = $_POST["price"];
$airline_code = $_POST["airline_code"];

$sql = "INSERT INTO flight VALUES(".$flight_id.", ".$departure.", ".$arrival.", ".$departure_date.", ".$arrival_date.", ".$passenger_limit.", ".$status.", ".
	$status_changed_by.", ".$price.", ".$airline_code.")";


$sth = oci_parse($dbh, $sql);
oci_execute($sth, OCI_DEFAULT);



ocilogoff($dbh)

?>
