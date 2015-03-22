<?php $path = $_SERVER['DOCUMENT_ROOT'] . "/"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Discount Airlines - Create Account</title>
  <?php include( $path . "partials/meta.php" ); ?>
  <?php include( $path . "partials/styles.php" ); ?>
  <?php include( $path . "partials/scripts.php" ); ?>
</head>
<body>
	<?php include( $path . "partials/navbar.php" ); ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-xs-12">
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="profile.php">Profile</a></li>
					<li><a href="bookings.php">Bookings</a></li>
					<li><a href="passengers.php">Passengers</a></li>
				</ul>
			</div>
			<div class="col-sm-8 col-xs-12">
				<form action="" class="form-horizontal">
					<div class="form-group">
						<label for="fn-container" class="col-sm-6 col-xs-12">First Name</label>
						<div class="col-sm-6 col-xs-12">
							<input type="text" class="form-control" id="fn-container">
						</div>
					</div>
					<div class="form-group">
						<label for="ln-container" class="col-sm-6 col-xs-12">Last Name</label>
						<div class="col-sm-6 col-xs-12">
							<input type="text" class="form-control" id="ln-container">
						</div>
					</div>
					<div class="form-group">
						<label for="ph-container" class="col-sm-6 col-xs-12">Phone</label>
						<div class="col-sm-6 col-xs-12">
							<input type="text" class="form-control" id="ph-container">
						</div>
					</div>
					<div class="form-group">
						<label for="pass-container" class="col-sm-6 col-xs-12">Passport</label>
						<div class="col-sm-6 col-xs-12">
							<input type="text" class="form-control" id="pass-container">
						</div>
					</div>
					<div class="form-group">
						<label for="country-container" class="col-sm-6 col-xs-12">Country</label>
						<div class="col-sm-6 col-xs-12">
							<input type="text" class="form-control" id="country-container">
						</div>
					</div>
					<div class="form-group">
						<label for="diet-container" class="col-sm-6 col-xs-12">Diet</label>
						<div class="col-sm-6 col-xs-12">
							<!-- <input type="text" class="form-control" id="fn-container"> -->
							<select name="" id="diet-container" class="form-control">
								<option value="veg">Vegetarian</option>
								<option value="nonveg">Non-Vegetarian</option>
								<option value="halal">Halal</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<button class="btn btn-primary pull-right" type="submit">Save</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>