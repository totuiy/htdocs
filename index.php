<!DOCTYPE html>
<html>
  <head>
    <title>Boda-Border</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Call .less file -->
	<link rel="stylesheet/less" type="text/css" href="less/jumbotron.less">
	<script src="less.js" type="text/javascript"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


<!-- navbar -->
   <nav class="navbar navbar-inverse" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php" ><font color="white">Boda-Border</font></a>
  </div>
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li><a href="register.php">Register Drivers</a></li>
    </ul>
 
  </div><!-- /.navbar-collapse -->
</nav> 

<!-- jumbotron -->

<div class="jumbotron">
  <h1>Boda-Border</h1>
  <p>Enjoy Your Boda Life<p>
  <form class="navbar-form navbar-left" role="search" action = "search.php" method="post">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="nm">
  </div>
  <p><button class="btn btn-primary btn-lg" role="button" type="submit">Search Now!</button></p>
</form>
</div>

<div class="row">
  <div class="col-sm-12 col-md-12">
    <div class="thumbnail">
      <div class="caption">
        <h3>STEP 1</h3>
        <p>Register your favorite drivers. If you use boda-boda and you liked it, you can register your favorite drivers. If you are a driver, you can register yourself to make people known you.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-12 col-md-12">
    <div class="thumbnail">
      <div class="caption">
        <h3>STEP 2</h3>
        <p>You can search drivers you want to ride. You can search drivers who are near your place or who are very safer than others by phone numbers or your area.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-12 col-md-12">
    <div class="thumbnail">  
      <div class="caption">
        <h3>STEP 3</h3>
        <p>Please rate the driver and have a comment. People can easily know who is a good driver.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-12 col-md-12">
    <div class="thumbnail">  
      <div class="caption">
        <h3>It's now comming...</h3>
        <p>Now apps for iOS/Android are comming! You can more easily use boda-border anywhere. Please wait for a moment...</p>
      </div>
    </div>
  </div>
</div>
  </body>
</html>
