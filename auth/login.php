<html>
<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="/views/css/style.css">
</head>
<!-- login page for users -->
<body id="loginPage">
<div id="header"></div><br />
<?php 

session_start();
$path = $_SERVER['DOCUMENT_ROOT'] . "/";
include($path. "auth/passwords.php"); 

if(array_key_exists("ac", $_POST)){
     if ($_POST["ac"]=="log") { 
     /// do after login form is submitted and details are sent to login.php by post method
          if(array_key_exists($_POST["email"], $USERS)){
               if ($USERS[$_POST["email"]]==$_POST["password"]) { 
               /// check if submitted username and password exist in $USERS array.
               /// set "logged" attribute of $_SESSION as user name and redirect to readblogs.php
                    $_SESSION["logged"]=$_POST["email"]; 
                    /// header('Location: ' .$path. 'index.php'); 
               } else { 
                    echo '<center><h3 style="color:red">Incorrect password. Please, try again.</h3></center>'; 
               }; 
          }
          else {
               echo '<center><h3 style="color:red">Email does not exist. Please, try again.</h3></center>';
          }
     }; 
}

if(array_key_exists("logged", $_SESSION)){
     if (array_key_exists($_SESSION["logged"],$USERS)) { //// check if user is logged or not  
          echo "You are logged in.";
          echo $_SESSION["logged"];
          header('Location:'.'/index.php');
           //// if user is logged show a message            
     }
} else { //// if not logged show login form 
     include 'loginForm.php';
}; 
?>

<div id="footer"></div>
<script>
  ///$("#header").load("../view/common/header.php"); 
  ///$("#footer").load("../view/common/footer.php"); 
</script> 
</body>
</html>
