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
		<h1 class="text-center">Choose Your Forward Flight</h1>
		<div class="row">
			<div class="col-xs-12">
				<div class="list-group">
					<a href="return-flight.php" class="list-group-item">
						<h1>
							S$830<small>/<span class="glyphicon glyphicon-user" aria-hidden="true"></span></small>
							<img src="http://img2.wikia.nocookie.net/__cb20100506081728/logopedia/images/f/fa/Singapore_Airlines.svg" alt="" class="logo">
							<small>
								Singapore Airlines
							</small>
						</h1>
						<p>
							Departing from 
							<span class="lead">Changi International Airport</span>
							on 
							<span class="lead">Saturday, 14th March 2015</span>
							at 
							<span class="lead">8:30 AM</span>
							<br>
							and expected to reach 
							<span class="lead">Dubai International Airport</span>
							on 
							<span class="lead">the same day</span>
							at 
							<span class="lead">6:00 PM</span> local time.
						</p>
					</a>
				</div>
			</div>
		</div>
		<!-- This section should only show if there is a return flight involved -->
		<?php if($_GET["flightType"] != "one-way"){ ?>
		<h1 class="text-center">Choose Your Return Flight</h1>
		<div class="row">
			<div class="col-xs-12">
				<div class="list-group">
					<a href="return-flight.php" class="list-group-item">
						<h1>
							S$830<small>/<span class="glyphicon glyphicon-user" aria-hidden="true"></span></small>
							<img src="http://img2.wikia.nocookie.net/__cb20100506081728/logopedia/images/f/fa/Singapore_Airlines.svg" alt="" class="logo">
							<small>
								Singapore Airlines
							</small>
						</h1>
						<p>
							Departing from 
							<span class="lead">Changi International Airport</span>
							on 
							<span class="lead">Saturday, 14th March 2015</span>
							at 
							<span class="lead">8:30 AM</span>
							<br>
							and expected to reach 
							<span class="lead">Dubai International Airport</span>
							on 
							<span class="lead">the same day</span>
							at 
							<span class="lead">6:00 PM</span> local time.
						</p>
					</a>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</body>
</html>