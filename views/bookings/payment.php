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
		<div class="well">
			<h1 class="text-center">Payment Breakdown</h1>
			<div class="row">
				<div class="col-xs-6">
					<p class="text-right">Singapore Airlines Flight MI467</p>
				</div>
				<div class="col-xs-6">
					<p class="text-left"><strong>S$ 830</strong></p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<p class="text-right">Singapore Airlines Flight MI465</p>
				</div>
				<div class="col-xs-6">

					<p class="text-left"><strong>S$ 816</strong></p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<p class="text-right">Discount Airlines Booking Fee</p>
				</div>
				<div class="col-xs-6">
					<p class="text-left"><strong>S$ 56</strong></p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<p class="text-right"><strong>Total</strong></p>
				</div>
				<div class="col-xs-6">
					<p class="text-left"><strong>S$ 1702</strong></p>
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