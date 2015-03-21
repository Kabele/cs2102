<?php $path = $_SERVER['DOCUMENT_ROOT'] . "/"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Discount Airlines</title>
  <?php include( $path . "partials/meta.php" ); ?>
  <?php include( $path . "partials/styles.php" ); ?>
  <?php include( $path . "partials/scripts.php" ); ?>
</head>
<body>
  <?php include( $path . "partials/navbar.php" ); ?>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <ol class="list-group">
          <li class="list-group-item">
            <div class="row">
              <div class="col-xs-8">
                <h5>
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
        </ol>
        <a href="/flights/create.php" class="btn btn-primary">
          Create New Flight
        </a>
      </div>
    </div>
  </div>