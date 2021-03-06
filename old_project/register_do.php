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

function phoneExists($phone, $dbh) {
	$sql ="select * from drivers where phone = :phone limit 1";
	$stmt = $dbh->prepare($sql);
	$stmt->execute(array(":phone" => $phone));
	$driver = $stmt->fetch();
	return $driver ? true : false;
}

if (empty($phone)) {
	// print error message on this page
}else {
	if (phoneExists($phone, $dbh)) {
		// jump to driver_exists.php
		header('location: driver_exists.php');
	}else {
	$sql = "insert into drivers
		(name, phone, number, area, rate)
		values
		(:name, :phone, :number, :area, :rate)";
	$stmt = $dbh->prepare($sql);
	$params = array(
		":name" => $name,
		":phone" => $phone,
		":number" => $number,
		":area" => $area,
		":rate" => $rate,
	);
	$stmt->execute($params);
	
	// connect again
	$link = mysql_connect('localhost', 'dbuser', '5TNKr847');
	if (!$link) { die('Failed to connect'.mysql_error()); }
	$db_selected = mysql_select_db('boda', $link);
	if (!$db_selected){ die('Failed to select a database'.mysql_error()); }
	// Pick Drivers' IDs
	$recordSet = mysql_query("SELECT id FROM drivers WHERE phone = '$phone'");
	if (!$recordSet) { die('Failed of query: '.mysql_error()); }
	$data = mysql_fetch_assoc($recordSet);
	$id = $data["id"];
	// insert rate and review
	$sql = "INSERT INTO reviews
		(id, rate, review)
		values
		(:id, :rate, :review)";
	$stmt = $dbh->prepare($sql);
	$params = array(
		":id" => $id,
		":rate" => $rate,
		":review" => $review,
	);
	$stmt->execute($params);
	header('location: register_succeeded.php');
	}	
}



mysql_close($link);
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

    <title>Thank you very much for your registering</title>

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
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
      <li><a href="register.php">Register Driver</a></li>
    </ul>
  </div><!-- navbar-collapse -->
</nav>

<br><br><br>
<div align="center">
<h3>Please input the phone number at leaset.</h3>
<a href="register.php" button type="button" class="btn btn-default">Back</a>
</div>

<!-- footer -->
<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
<!--     
 <li><a href="#">Link</a></li>
-->
	</ul>
    <ul class="nav navbar-nav navbar-right">
      <p class="navbar-text">Copyright (c) totu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
