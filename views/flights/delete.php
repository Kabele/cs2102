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
$departure_date = $_POST["departure_date"];


$sql = "DELETE FROM flight WHERE flight_id = '".$flight_id."' AND departure_date = '". $departure_date."'";


$sth = oci_parse($dbh, $sql);
oci_execute($sth, OCI_DEFAULT);



ocilogoff($dbh)

?>
