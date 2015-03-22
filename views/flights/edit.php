<?php

// connect and set option
$path = $_SERVER['DOCUMENT_ROOT'] . "/";

require_once $path.'php/connect.php';

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
	$status_changed_by."', price = '".$price."', airline_code = '".$airline_code."' WHERE flight_id = '".$flight_id."' AND departure_date = '". $departure_date."';";

$db->query($sql);

?>
