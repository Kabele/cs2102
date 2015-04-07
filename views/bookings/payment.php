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
	<?php 
	require_once $path.'/php/connect.php';
	$forward_sql = sprintf('SELECT '.
		'f.flight_id, f.departure, f.arrival, '.
		'f.departure_date, f.arrival_date, f.price, '.
		'f.airline_code, f.passenger_limit, '.
		'f.status_changed_by, a.logo, a.name '.
		'FROM flight f, airline a '.
		'WHERE f.flight_id = "%s" AND f.departure_date = "%s" AND f.airline_code = a.airline_code;',
		$_GET['forward'],$_GET['fdate']);
	$return_sql = sprintf('SELECT '.
		'f.flight_id, f.departure, f.arrival, '.
		'f.departure_date, f.arrival_date, f.price, '.
		'f.airline_code, f.passenger_limit, '.
		'f.status_changed_by, a.logo, a.name '.
		'FROM flight f, airline a '.
		'WHERE f.flight_id = "%s" AND f.departure_date = "%s" AND f.airline_code = a.airline_code;',
		$_GET['backward'],$_GET['bdate']);
	$forward_res = $db->query($forward_sql);
	$return_res = $db->query($return_sql);
	$forward = mysqli_fetch_assoc($forward_res);
	$return = mysqli_fetch_assoc($return_res);
	?>
	<div class="container">
		<div class="well">
			<h1 class="text-center">Payment Breakdown</h1>
			<div class="row">
				<div class="col-xs-6">
					<p class="text-right"><?php echo $forward['name'].' Flight '.$forward['flight_id'] ?></p>
				</div>
				<div class="col-xs-6">
					<p class="text-left"><strong>S$ <?php echo $forward['price'] ?></strong></p>
				</div>
			</div>
			<?php if($_GET['backward'] != "") { ?>
			<div class="row">
				<div class="col-xs-6">
					<p class="text-right"><?php echo $return['name']. ' Flight '. $return['flight_id'] ?></p>
				</div>
				<div class="col-xs-6">
					<p class="text-left"><strong>S$ <?php echo $return['price'] ?></strong></p>
				</div>
			</div>
			<?php } ?>
			<?php 
			$total_fee = $forward['price'];
			if($_GET['backward'] != ""){
				$total_fee += $return['price'];
			}
			?>
			<div class="row">
				<div class="col-xs-6">
					<p class="text-right">Discount Airlines Booking Fee</p>
				</div>
				<div class="col-xs-6">
					<p class="text-left"><strong>S$ <?php echo $total_fee/10 ?></strong></p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<p class="text-right"><strong>Total</strong></p>
				</div>
				<div class="col-xs-6">
					<p class="text-left"><strong>S$ <?php echo $total_fee + $total_fee/10; ?></strong></p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 pull-right">
					<a href="success.php" class="btn btn-primary">Pay Now</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>