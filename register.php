<?php

require_once('config.php');
require_once('functions.php');

session_start();

$name = $_POST['name'];
$phone = $_POST['phone'];
$number = $_POST['number'];
$area = $_POST['area'];
$rate = $_POST['rate'];
$review = $_POST['review'];

$dbh = connectDb();

$err = array();

$sql = "insert into drivers
	(name, phone, number, area, rate, review)
	values
	(:name, :phone, :number, :area, :rate, :review)";
$stmt = $dbh->prepare($sql);
$params = array(
	":name" => $name,
	":phone" => $phone,
	":number" => $number,
	":area" => $area,
	":rate" => $rate,
	":review" => $review,
);
$stmt->execute($params);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Register Your Favorite Driver</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

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

    <div class="container">

      <form action="" class="form-signin" role="form" method="POST">
        <h2 class="form-signin-heading">Register Your Favorite Driver!</h2>
	<input type="text" class="form-control" name="name" placeholder="Name of Driver" required>
	<input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
	<input type="text" class="form-control" name="number" placeholder="Number of the bike" required>
	<input type="text" class="form-control" name="area" placeholder="Area" required>
	<input type="int" class="form-control" name="rate" placeholder="Rate" required>
	<input type="text" class="form-control" name="review" placeholder="Comment">
	<button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
	<br>
    <p><div class="btn-group" align="right">
  <button type="button" class="btn btn-default"><a href="index.php">Back</a></button>
</div></p>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
