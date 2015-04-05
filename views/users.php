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
  	<div class="row">
  		<div class="col-xs-12">
  			<ol class="list-group">

          <?php 

        require_once $path.'/php/connect.php';


        $sql = "SELECT w.email, w.is_admin
            FROM website_user w;";

          $res = $db->query($sql);

          while ($row = mysqli_fetch_assoc($res)) {

              echo '<li class="list-group-item">';
            echo '<div class="row">';
              echo '<div class="col-xs-8">';
              echo '<h5>';
                echo '<strong>'.$row['email'].'</strong>';
                echo '</h5>';
              echo '</div>';
              echo '<div class="col-xs-4 text-right">';
                echo '<button class="btn btn-info">';
                  echo 'Make Admin';
                echo '</button>'.'&nbsp';
                echo '<form style="display: inline" action="users/delete_user.php" method="POST">';
                echo '<button class="btn btn-danger" type="submit" name="email" value="'.$row['email'].'">';
                  echo 'Delete';
                echo '</button>';
                echo '</form>';
            echo '</div>';
          echo '</div>';
        echo '</li>';


          }





        ?>

  			</ol>	
  		</div>
  	</div>
  </div>