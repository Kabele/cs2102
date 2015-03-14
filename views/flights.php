<!DOCTYPE html>
<html lang="en">
<head>
  <title>Discount Airlines</title>
  <?php include( "partials/meta.php" ); ?>
  <?php include( "partials/styles.php" ); ?>
  <?php include( "partials/scripts.php" ); ?>
</head>
<body>
  <?php include( "partials/navbar.php" ); ?>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <ol class="breadcrumb">
          <li class="active"><a href="#">Search Flights</a></li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12">
        <p>
          <a class="btn btn-default" data-toggle="collapse" href="#flight-search-filter-container" aria-expanded="false" aria-controls="collapseExample">
            Filters
          </a>
        </p>
        <div class="collapse" id="flight-search-filter-container">
          <div class="panel">
            Hello
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12">
        <div class="list-group">
          <a href="#" class="list-group-item">
            <h1 >
              S$830
              <small>
                EM306 Emirates Airlines
              </small>
            </h1>
            <p>
              Departing from 
              <span class="lead">Changi International Airport</span>
               on 
              <span class="lead">Saturday, 14th March 2015</span>
               at 
              <span class="lead">8:30 AM</span>
              <br>
               and expected to reach 
              <span class="lead">Dubai International Airport</span>
               on 
              <span class="lead">the same day</span>
               at 
              <span class="lead">6:00 PM</span> local time.
            </p>
          </a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>