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
		<div class="well">
			<div class="row">
				<div class="col-xs-12">
					<h1 class="text-center">Create Flight</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<form action="" class="form-horizontal">
						<div class="form-group">
							<label for="flightid-container" class="col-sm-6 col-xs-12 control-label">
							Flight Code
							</label>
							<div class="col-sm-6 col-xs-12">
								<input type="text" class="form-control" id="flightid-container" placeholder="MI467">
							</div>
						</div>
						<div class="form-group">
							<label for="depart-container" class="col-sm-6 col-xs-12 control-label">
							Departing Airport
							</label>
							<div class="col-sm-6 col-xs-12">
								<input type="text" class="form-control" id="depart-container" placeholder="SIN - Changi Intl Airport">
							</div>
						</div>
						<div class="form-group">
							<label for="departtime-container" class="col-sm-6 col-xs-12 control-label">
							Departing Date/Time
							</label>
							<div class="col-sm-6 col-xs-12">
								<input type="datetime-local" class="form-control" id="departtime-container">
							</div>
						</div>
						<div class="form-group">
							<label for="arrive-container" class="col-sm-6 col-xs-12 control-label">
							Arriving Airport
							</label>
							<div class="col-sm-6 col-xs-12">
								<input type="text" class="form-control" id="arrive-container" placeholder="COK - Kochi Intl Airport">
							</div>
						</div>
						<div class="form-group">
							<label for="arrivetime-container" class="col-sm-6 col-xs-12 control-label">
							Arriving Date/Time
							</label>
							<div class="col-sm-6 col-xs-12">
								<input type="datetime-local" class="form-control" id="arrivetime-container">
							</div>
						</div>
						<div class="form-group">
							<label for="passlimit-container" class="col-sm-6 col-xs-12 control-label">
							Total number of passengers
							</label>
							<div class="col-sm-6 col-xs-12">
								<input type="number" class="form-control" id="passlimit-container" min="1" value="100">
							</div>
						</div>
						<div class="form-group">
							<label for="price-container" class="col-sm-6 col-xs-12 control-label">
							Price per Seat
							</label>
							<div class="col-sm-6 col-xs-12">
								<input type="number" class="form-control" id="price-container" min="0" value="0">
							</div>
						</div>
						<div class="form-group">
							<label for="airline-container" class="col-sm-6 col-xs-12 control-label">
							Operating Airlines	
							</label>
							<div class="col-sm-6 col-xs-12">
								<select name="" id="" class="form-control">
									<option value="SilkAir">SilkAir</option>
									<option value="Emirates">Emirates</option>
									<option value="Tiger Airways">Tiger Airways</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-6 col-sm-offset-6 col-xs-12">
								<button type="submit" class="btn btn-primary">Create Flight</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>