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

					<?php 
					require_once $path.'/php/connect.php';
						$sql_forward = sprintf('SELECT '.
		'f.flight_id, f.departure, f.arrival, '.
		'f.departure_date, f.departure_time, f.arrival_date, f.arrival_time, f.price, '.
		'f.airline_code, f.passenger_limit, '.
		'a.logo, a.name '.
    'FROM booking b, flight f, airline a '.
    'WHERE f.airline_code = a.airline_code AND '.
    'f.flight_id = b.flight_id AND f.departure_date = b.departure_date AND b.user_email = %s;',
    '"'.$_SESSION['logged'].'"');
	$res = $db->query($sql_forward);

	while ($row = mysqli_fetch_assoc($res)) {
					?>
					<li class="list-group-item">
						<div class="row">
							<div class="col-xs-8">
								<img src="http://img2.wikia.nocookie.net/__cb20100506081728/logopedia/images/f/fa/Singapore_Airlines.svg" alt="" class="logo">
								<span class="lead"><?php echo $row['name']." ".$row['flight_id']; ?></span>
								<span class="badge">Confirmed</span>
								<p>
									<ul>
										<li>Departing from <strong><?php echo $row['departure']; ?></strong> on <strong><?php echo $row['departure_date']; ?></strong> at <strong><?php echo $row['departure_time']; ?></strong></li>
										<li>Arriving at <strong><?php echo $row['arrival']; ?></strong> on <strong><?php echo $row['arrival_date']; ?></strong> at <strong><?php echo $row['arrival_time']; ?></strong></li>
										<li>Total Cost: <strong>S$<?php echo $row['price']; ?></strong></li>
										<li>Weight Limit per Passenger: <strong>20 KG / 7 KG</strong></li>
										<li>
											Passengers
											<ul class="passengers">

												<?php 
													$sql_forward = sprintf('SELECT '.
														'p.name '.
												    'FROM booking b, passenger p, booking_passenger bp '.
												    'WHERE  '.
												    'bp.flight_id = b.flight_id AND bp.departure_date = b.departure_date AND bp.passport = p.passport'.
												    'AND bp.user_email = %s AND bp.departure_date = %s AND bp.flight_id = %s;',
												    '"'.$_SESSION['logged'].'"', '"'.$row['departure_date'].'"', '"'.$row['flight_id'].'"');
													$res2 = $db->query($sql_forward);
													if(!$res2 || $res2->num_rows == 0) {
													}
													else {

													while ($row2 = mysqli_fetch_assoc($res2)) {

												?>

												<li><?php echo $row2['name']; ?></li>
												<?php } }?>
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
					<?php }?>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>