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

$sql = "INSERT INTO flight VALUES('".$flight_id."', '".$departure."', '".$arrival."', '".$departure_date."', '".$arrival_date."', '".$passenger_limit."', '".$status."', '".
	$status_changed_by."', '".$price."', '".$airline_code."');";

$db->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Discount Airlines</title>
  <?php include( $path . "views/partials/meta.php" ); ?>
  <?php include( $path . "views/partials/styles.php" ); ?>
  <?php include( $path . "views/partials/scripts.php" ); ?>
</head>
<body>
  <?php include( $path . "views/partials/navbar.php" ); ?>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <ol class="list-group">
          <li class="list-group-item">
            <div class="row">
              <div class="col-xs-8">
                <img src="http://img2.wikia.nocookie.net/__cb20100506081728/logopedia/images/f/fa/Singapore_Airlines.svg" alt="" class="logo">
                <span class="lead">Singapore Airlines Flight MI467</span>
                <p>
                  <ul>
                    <li>Departing from <strong>Changi Airport</strong> on <strong>March 31st, 2015</strong> at <strong>08:00 AM</strong></li>
                    <li>Arriving at <strong>Changi Airport</strong> on <strong>March 31st, 2015</strong> at <strong>08:00 AM</strong></li>
                    <li>Ticket Price: <strong>S$369</strong></li>
                    <li>Total Capacity of <strong>300</strong> passengers (<strong>198</strong> booked so far)</li>
                    <li>Last Edited by <em>allwin@discountair.com</em></li>
                  </ul>
                </p>
              </h5>
            </div>
            <div class="col-xs-4 text-right">
              <button class="btn btn-default">
                Edit
              </button>
              <button class="btn btn-danger">
                Delete
              </button>
            </div>
          </div>
        </li>

        <?php 

        require_once $path.'php/connect.php';


        $sql = "SELECT f.flight_id, f.departure, f.arrival, f.departure_date, f.arrival_date, f.price, f.airline_code, f.passenger_limit, f.status_changed_by, a.logo, a.name
            FROM flight f, airline a WHERE f.airline_code = a.airline_code;";

          $res = $db->query($sql);

          while ($row = mysqli_fetch_assoc($res)) {

              echo '<li class="list-group-item">';
            echo '<div class="row">';
              echo '<div class="col-xs-8">';
                echo '<img src="'.$row['logo'].'" alt="" class="logo">';
                echo '<span class="lead">'.$row['airline_code'].'</span>';
                echo '<p>';
                  echo '<ul>';
                    echo '<li>Departing from <strong>'.$row['departure'].'</strong> on <strong>'.$row['departure_date'].'</strong> at <strong>08:00 AM</strong></li>';
                    echo '<li>Arriving at <strong>'.$row['arrival'].'</strong> on <strong>'.$row['arrival_date'].'</strong> at <strong>08:00 AM</strong></li>';
                    echo '<li>Ticket Price: <strong>'.$row['price'].'</strong></li>';
                    echo '<li>Total Capacity of <strong>'.$row['passenger_limit'].'</strong> passengers (<strong>198</strong> booked so far)</li>';
                    echo '<li>Last Edited by <em>'.$row['status_changed_by'].'</em></li>';
                  echo '</ul>';
                echo '</p>';
              echo '</h5>';
            echo '</div>';
            echo '<div class="col-xs-4 text-right">';
              echo '<button class="btn btn-default">';
                echo 'Edit';
              echo '</button>';
              echo '<button class="btn btn-danger">';
                echo 'Delete';
              echo '</button>';
            echo '</div>';
          echo '</div>';
        echo '</li>';


          }





        ?>        

      </ol>
      <a href="/views/flights/create.php" class="btn btn-primary">
        Create New Flight
      </a>
    </div>
  </div>
</div>