<?php $path = $_SERVER['DOCUMENT_ROOT'] . "/"; ?>
<?php include( $path . "views/partials/global.php" ); ?>
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
  						<h5>
								<img src="http://img2.wikia.nocookie.net/__cb20100506081728/logopedia/images/f/fa/Singapore_Airlines.svg" alt="" class="logo">
  							<strong>Singapore Airlines</strong>
  							<span>(IATA Code: 2X)</span>
  						</h5>
  						</div>
  						<div class="col-xs-4 text-right">
  							<button class="btn btn-info">
  								Edit
  							</button>
  							<button class="btn btn-danger">
  								Delete
  							</button>
  						</div>
  					</div>
  				</li>

          <?php 

        require_once $path.'/php/connect.php';


        $sql = "SELECT a.airline_code, a.name, a.logo
            FROM airline a;";

          $res = $db->query($sql);

          while ($row = mysqli_fetch_assoc($res)) {

              echo '<li class="list-group-item">';
            echo '<div class="row">';
              echo '<div class="col-xs-8">';
              echo '<h5>';
                echo '<img src="'.$row['logo'].'" alt="" class="logo">'.'&nbsp';
                echo '<strong>'.$row['name'].'</strong>'.'&nbsp';
                echo '<span>(IATA Code: '.$row['airline_code'].')</span>';
                echo '</h5>';
              echo '</div>';
              echo '<div class="col-xs-4 text-right">';
              echo '<form style="display: inline" action="" method="POST">';
                echo '<button class="btn btn-info">';
                  echo 'Edit';
                echo '</button>'.'&nbsp';
                echo '</form>';
                echo '<form style="display: inline" action="flight_providers/delete_flight_provider.php" method="POST">';
                echo '<button class="btn btn-danger" type="submit" name="airline_code" value="'.$row['airline_code'].'">';
                  echo 'Delete';
                echo '</button>';
                echo '</form>';
            echo '</div>';
          echo '</div>';
        echo '</li>';


          }





        ?>

  			</ol>
  			<a href="/views/flight_providers/create.php" class="btn btn-primary">Create new Airline</a>
  		</div>
  	</div>
  </div>