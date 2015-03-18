<!DOCTYPE html>
<html lang="en">
<head>
  <title>Discount Airlines</title>
  <?php include( "partials/meta.php" ); ?>
  <?php include( "partials/styles.php" ); ?>
  <?php include( "partials/scripts.php" ); ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
  <?php include( "partials/navbar.php" ); ?>
  <div class="container" style="background-image: url(./images/flight.jpg); 
      height: 550px; width: 100%; background-size: cover; background-repeat: no-repeat;">

      <div class="col-sm-5">
        <div id="rectangle" class="bigRectangle">
          <div class="flightSearchBox">
            <hr style="height: 3px; visibility:hidden;" />
            <h3 class="centerAlign">Search for Flights!</h3>
            <input style="margin-left: 20px; margin-top: 10px;" type="radio" name="type" value="one-way"> ONE WAY &nbsp; &nbsp; &nbsp;
            <input type="radio" name="type" value="round" checked> ROUND TRIP
            <br>
            <br>
            <p style="margin-left: 20px;">FROM</p>
            <select id="countryFrom" name="country" style="margin-left: 20px; width: 200px;"></select>
            <br>
            <br>
            <p style="margin-left: 20px;">TO</p>
            <select id="countryTo" name="country" style="margin-left: 20px; width: 200px;"></select>
            <br>
            <br>
            <p style="margin-left: 20px;">DEPARTURE</p>
            <select id="departuredaydropdown" style="margin-left: 20px;"></select> 
            <select id="departuremonthdropdown"></select> 
            <select id="departureyeardropdown"></select>
            <br>
            <br>
            <p style="margin-left: 20px;">RETURN</p>
            <select id="returndaydropdown" style="margin-left: 20px;"></select> 
            <select id="returnmonthdropdown"></select> 
            <select id="returnyeardropdown"></select>
            <br>
            <br>
            <p style="margin-left: 20px; display: inline">ADULT</p> &nbsp;
            <p style="margin-left: 20px; display: inline">CHILD</p>
            <br>
            <select id="noofadult" style="margin-left: 20px;"></select>
            <select id="noofchild" style="margin-left: 40px;"></select>
            <br>
            <br>
            <button onclick="document.location.href='./flights.php'" style="margin-left: 20px;" class="searchButton" type="button">Search</button>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div id="timedMsgDiv"></div>
      </div>
  </div>

  <div class="row">
  <div class="col-sm-4">
    <div id="rectangle" class="smallRectangle">
      <h3 class="centerAlign">Last Added Flight</h3>
    </div>
    <div id="rectangle" class="mediumRectangle">
      <li style="list-style-type: none;">
        <img class="col-sm-4" src="./images/thumbnail.png">
        <h4>Flight Name</h4>
        <h5 style="display: inline">From</h5> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <h5 style="display: inline">To</h5>
        <p>Price</p>
      </li>
      <li style="list-style-type: none;">
        <img class="col-sm-4" src="./images/thumbnail.png">
        <h4>Flight Name</h4>
        <h5 style="display: inline">From</h5> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <h5 style="display: inline">To</h5>
        <p>Price</p>
      </li>
      <li class="last" style="list-style-type: none;">
        <img class="col-sm-4" src="./images/thumbnail.png">
        <h4>Flight Name</h4>
        <h5 style="display: inline">From</h5> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <h5 style="display: inline">To</h5>
        <p>Price</p>
      </li>
    </div>
  </div>
  <div class="col-sm-4">
    <div id="rectangle" class="smallRectangle">
      <h3 class="centerAlign">Recently Sold Flight</h3>
    </div>
    <div id="rectangle" class="mediumRectangle">
    <li style="list-style-type: none;">
        <img class="col-sm-4" src="./images/thumbnail.png">
        <h4>Flight Name</h4>
        <h5 style="display: inline">From</h5> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <h5 style="display: inline">To</h5>
        <p>Price</p>
      </li>
      <li style="list-style-type: none;">
        <img class="col-sm-4" src="./images/thumbnail.png">
        <h4>Flight Name</h4>
        <h5 style="display: inline">From</h5> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <h5 style="display: inline">To</h5>
        <p>Price</p>
      </li>
      <li class="last" style="list-style-type: none;">
        <img class="col-sm-4" src="./images/thumbnail.png">
        <h4>Flight Name</h4>
        <h5 style="display: inline">From</h5> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <h5 style="display: inline">To</h5>
        <p>Price</p>
      </li> 
    </div>
  </div>
  <div class="col-sm-4">
    <div id="rectangle" class="smallRectangle">
      <h3 class="centerAlign">Quick Links</h3>
    </div>
    <div id="rectangle" class="mediumRectangle">
    <hr style="height: 1px; visibility:hidden;" />
    <li style="list-style-type: none;">
      <h4>Link 1</h4>
    </li>
    <li style="list-style-type: none;">
      <h4>Link 1</h4>
    </li>
    <li style="list-style-type: none;">
      <h4>Link 1</h4>
    </li>
    <li style="list-style-type: none;">
      <h4>Link 1</h4>
    </li>
    <li style="list-style-type: none;">
      <h4>Link 1</h4>
    </li>
    <li class="last" style="list-style-type: none;">
      <h4>Link 1</h4>
    </li>
    </div>
  </div>  
  </div>

  <script src="./js/custom.js"></script>
  <script language="javascript">
      window.onload = init();
      populateCountries("countryFrom");
      populateCountries("countryTo");
      populatedropdown("departuredaydropdown", "departuremonthdropdown", "departureyeardropdown");
      populatedropdown("returndaydropdown", "returnmonthdropdown", "returnyeardropdown");
      populatePassengers("noofadult");
      populatePassengers("noofchild");
  </script>
</body>
</html>