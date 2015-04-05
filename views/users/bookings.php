<?php $path = $_SERVER['DOCUMENT_ROOT'] . "/"; ?>
<?php include( $path . "views/partials/global.php" ); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Discount Airlines - Create Account</title>
	<?php include( $path . "views/partials/meta.php" ); ?>
	<?php include( $path . "views/partials/styles.php" ); ?>
	<?php include( $path . "views/partials/scripts.php" ); ?>
</head>
<body>
	<?php include( $path . "views/partials/navbar.php" ); ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-xs-12">
				<ul class="nav nav-pills nav-stacked">
					<li><a href="profile.php">Profile</a></li>
					<li class="active"><a href="bookings.php">Bookings</a></li>
					<li><a href="passengers.php">Passengers</a></li>
				</ul>
			</div>
			<div class="col-sm-8 col-xs-12">
				<ul class="list-group">
					<li class="list-group-item">
						<div class="row">
							<div class="col-xs-8">
								<img src="http://img2.wikia.nocookie.net/__cb20100506081728/logopedia/images/f/fa/Singapore_Airlines.svg" alt="" class="logo">
								<span class="lead">Singapore Airlines Flight MI467</span>
								<span class="badge">Confirmed</span>
								<p>
									<ul>
										<li>Departing from <strong>Changi Airport</strong> on <strong>March 31st, 2015</strong> at <strong>08:00 AM</strong></li>
										<li>Arriving at <strong>Changi Airport</strong> on <strong>March 31st, 2015</strong> at <strong>08:00 AM</strong></li>
										<li>Total Cost: <strong>S$729</strong></li>
										<li>Weight Limit per Passenger: <strong>20 KG / 7 KG</strong></li>
										<li>
											Passengers
											<ul class="passengers">
												<li>Ross Everyman</li>
												<li>Bob Everyman</li>
											</ul>
										</li>
									</ul>
								</p>
							</div>
							<div class="col-xs-4">
								<a href="" class="btn btn-danger pull-right">Cancel</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>