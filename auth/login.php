<html>
<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<!-- login page for users -->
<body>
<div id="header"></div><br />
<div id="content" class="container">
<?php 

session_start(); 
include($_SERVER['DOCUMENT_ROOT']."/auth/passwords.php"); 
if(array_key_exists("ac", $_POST)){
     if ($_POST["ac"]=="log") { 
     /// do after login form is submitted and details are sent to login.php by post method
          if(array_key_exists($_POST["username"], $USERS)){
               if ($USERS[$_POST["username"]]==$_POST["password"]) { 
               /// check if submitted username and password exist in $USERS array.
               /// set "logged" attribute of $_SESSION as user name and redirect to readblogs.php
                    $_SESSION["logged"]=$_POST["username"]; 
                    header("Location: ../views/index.php"); 
               } else { 
                    echo 'Incorrect password. Please, try again.'; 
               }; 
          }
          else {
               echo 'Username does not exist. Please, try again.';
          }
     }; 
}
if(array_key_exists("logged", $_SESSION)){
     if (array_key_exists($_SESSION["logged"],$USERS)) { //// check if user is logged or not  
          echo "You are logged in."; //// if user is logged show a message            
     }
} else { //// if not logged show login form 
     ?>
     <!-- form for user to enter login details - user name and password  and send it to login.php by post method-->
     <form action="../auth/login.php" method="post" class="form-horizontal"><input type="hidden" name="ac" value="log"> 
               <div class="control-group">
                    <label class="control-label">Username:</label>
                    <div class="controls">
                         <input type="text" name="username">
                    </div>
               </div>
               <div class="control-group">
                    <label class="control-label">Password:</label>
                    <div class="controls">
                         <input type="password" name="password">
                    </div>
               </div>
               <div class="control-group">
                    <label class="control-label"></label>
                    <div class="controls">
                         <button type="submit" class="btn btn-success" >Login</button>
                    </div>
               </div>
     </form>
     <?php
}; 
?>
</div><br />
<div id="footer"></div>
<script>
  ///$("#header").load("../view/common/header.php"); 
  ///$("#footer").load("../view/common/footer.php"); 
</script> 
</body>
</html>
