<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img alt="Brand" class="logo" src="images/logo.png">
      </a>
      <a class="navbar-brand" href="#">
        Discount Airlines
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">    
        <li class="dropdown">
          <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
          <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
            <form method="post" action="login" accept-charset="UTF-8">
              <div class="form-group">
                <label for="input-username">Passport No</label>
                <input class="form-control" style="margin-bottom: 15px;" type="text" placeholder="Passport No." id="input-username" name="username">
              </div>
              <div class="form-group">
                <label for="input-password">Password</label>
                <input class="form-control" style="margin-bottom: 15px;" type="password" placeholder="Password" id="input-password" name="password">
              </div>
              <input class="btn btn-primary btn-block" type="submit" id="sign-in" value="Sign In">
            </form>
            <p class="text-center">
              <a href="#">Register Now!</a>
            </p>
          </div>
        </li>
      </ul>
    </li>
  </ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
<script>
  $(document).ready(function(){
    //Handles menu drop down
    $('.dropdown-menu').find('form').click(function (e) {
        e.stopPropagation();
    });
  });
</script>