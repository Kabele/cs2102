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
  	<div class="row">
  		<div class="col-xs-12">
  			<ol class="list-group">
  				<li class="list-group-item">
  					<div class="row">
  						<div class="col-xs-8">
  						<h5>
                <strong>Bob Everyman</strong>
								<span>bob@example.com</span>
  						</h5>
  						</div>
  						<div class="col-xs-4 text-right">
  							<button class="btn btn-info">
  								Make Admin
  							</button>
  							<button class="btn btn-danger">
  								Delete
  							</button>
  						</div>
  					</div>
  				</li>
  			</ol>	
  		</div>
  	</div>
  </div>