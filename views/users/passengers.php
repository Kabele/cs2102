<?php $path = $_SERVER['DOCUMENT_ROOT'] . "/"; ?>
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
					<li><a href="bookings.php">Bookings</a></li>
					<li class="active"><a href="passengers.php">Passengers</a></li>
				</ul>
			</div>
			<div class="col-sm-8 col-xs-12">
				<div class="row">
					<div class="col-xs-12">
						<form action="" class="form-inline">
							<p>
							<div class="form-group">
								<input type="text" class="form-control" id="passenger-firstname" placeholder="First Name">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="passenger-lastname" placeholder="Last Name">
							</div>
							<div class="form-group">
								<select name="" id="" class="form-control">
									<option value="veg">Vegetarian</option>
									<option value="nonveg">Non-Vegetarian</option>
									<option value="halal">Halal</option>
								</select>
							</div>
							</p>
							<p>
							<div class="form-group">
								<input type="text" class="form-control" id="passenger-passport" placeholder="Passport">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="passenger-country" placeholder="Country">
							</div>
							<div class="form-group">
								<button class="btn btn-default">Add New Passenger</button>
							</div>
							</p>
						</form>
					</div>
				</div>
				<ul class="list-group">
					<li class="list-group-item">
						<div class="row">
							<div class="col-xs-10">
								Ross Everyman (H94235490), United States
								<span class="badge">Vegetarian</span>
							</div>
							<div class="col-xs-2">
								<a href="#" class="btn btn-danger btn-sm pull-right">Remove</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>