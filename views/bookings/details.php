<?php include( "views/partials/global.php" ); ?>
<?php $path = $_SERVER['DOCUMENT_ROOT'] . "/"; ?>
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
		<h1 class="text-center">Almost there!</h1>
		<div class="row">
			<div class="col-xs-12">
				<p class="lead">You selected 3 passengers. Please provide their details below</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<ul class="list-group">
					<li class="list-group-item">
						<div class="row">
							<div class="col-xs-6"><strong>Passenger #1: </strong></div>
							<div class="col-xs-6 pull-right">
								<select class="form-control" name="" id="">
									<option value="">Ray Everyman</option>
									<option value="">Bob Everyman</option>
									<option value="">New Passenger..</option>
								</select>	
							</div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-xs-6"><strong>Passenger #2: </strong></div>
							<div class="col-xs-6 pull-right">
								<select class="form-control" name="" id="">
									<option value="">Ray Everyman</option>
									<option value="">Bob Everyman</option>
									<option value="">New Passenger..</option>
								</select>	
							</div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-xs-6"><strong>Passenger #3: </strong></div>
							<div class="col-xs-6 pull-right">
								<select class="form-control" name="" id="">
									<option value="">Ray Everyman</option>
									<option value="">Bob Everyman</option>
									<option value="">New Passenger..</option>
								</select>	
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="list-group">
					<a href="return-flight.php" class="list-group-item">
						<h1>
							S$830
							<small>
								Singapore Airlines
							</small>
							<img src="http://img2.wikia.nocookie.net/__cb20100506081728/logopedia/images/f/fa/Singapore_Airlines.svg" alt="" class="logo">
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
					<a href="details.php" class="list-group-item">
						<h1>
							S$816
							<small>
								Singapore Airlines
							</small>
							<img src="http://img2.wikia.nocookie.net/__cb20100506081728/logopedia/images/f/fa/Singapore_Airlines.svg" alt="" class="logo">
						</h1>
						<p>
							Departing from 
							<span class="lead">Dubai International Airport</span>
							on 
							<span class="lead">Saturday, 16th March 2015</span>
							at 
							<span class="lead">8:30 AM</span>
							<br>
							and expected to reach 
							<span class="lead">Changi International Airport</span>
							on 
							<span class="lead">the same day</span>
							at 
							<span class="lead">6:00 PM</span> local time.
						</p>
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12"><a href="payment.php" class="btn btn-primary pull-right">
				Proceed To Payment
			</a></div>
		</div>
	</div>
</body>
</html>