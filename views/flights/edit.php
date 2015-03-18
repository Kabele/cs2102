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

$sql = "UPDATE flight SET departure = '".$departure."', arrival = '".$arrival."', departure_date = '".$departure_date."', arrival_date = '".$arrival_date."', passenger_limit = '".$passenger_limit."', status = '".$status."', status_changed_by = '".
	$status_changed_by."', price = '".$price."', airline_code = '".$airline_code."' WHERE flight_id = '".$flight_id."' AND departure_date = '". $departure_date."'";


$sth = oci_parse($dbh, $sql);
oci_execute($sth, OCI_DEFAULT);



ocilogoff($dbh)

?>
