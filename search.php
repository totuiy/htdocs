<!DOCTYPE html>
<html>
  <head>        
        <title>Result of Search</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/signin.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
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
 
  </div><!-- /.navbar-collapse -->
</nav> 

<br>
<h2>Result of the Search</h2>
<br>

<?php

require_once('config.php');
require_once('functions.php');

session_start();

// connect database
// $dbh = connectDb();
$link = mysql_connect('localhost', 'root', 'root');
if (!$link) { die('Failed to connect'.mysql_error()); }
$db_selected = mysql_select_db('boda', $link);
if (!$db_selected){ die('Failed to select a database'.mysql_error()); }

$sa = $_POST["searchArea"];

$result = mysql_query("SELECT * FROM drivers WHERE area LIKE '%$sa%'");
if (!$result) { die('Failed of query: '.mysql_error()); }

// Pick Drivers' IDs
$recordSet = mysql_query("SELECT id FROM drivers WHERE area LIKE '%$sa%'");
if (!$recordSet) { die('Failed of query: '.mysql_error()); }
$idData = mysql_fetch_assoc($recordSet);
$_SESSION['data'] = $idData["id"];

/*
// Fetch the review from table reviews
$recordReview = mysql_query("SELECT * FROM reviews WHERE id = $id");
if (!$recordReview) { die('Failed of query: '.mysql_error()); }
$data_review = mysql_fetch_assoc($recordReview);
 */

// Print the Result
$table = '"table table-striped"';
$detailPage = "\"detail.php?id=";
$reviewPage = "\"review.php?id=";
$align = '"left"';
$type='"button"';
$class='"btn btn-primary"';
echo"<table class=".$table.">";
echo"<tr><td align=".$align."><strong>Name</strong></td><td><strong>Phone Number</strong></td><td><strong>Plate Number</strong></td><td><strong>Area</strong></td><td><strong>Rating</strong></td><td></td><td></td></tr>";
while ($row = mysql_fetch_assoc($result)) {
	echo"<tr>";
	$i = 0;
	$id[$i] = $row["id"];
	// echo"<td>".$id[$i]."</td>";
	echo"<td>".$row["fname"]."&nbsp;".$row["sname"]."</td>";
        echo"<td>".$row["phone"]."</td>";
        echo"<td>".$row["number"]."</td>";
        echo"<td>".$row["area"]."</td>";
	echo"<td>";
	$r=$row["rate"];
	for ($j=0; $j<$r; $j++) {
		echo"&#9733";
	}
	for (; $j<5; $j++) {
		echo"&#9734";
	}	
	echo"</td>";
	// Pass the date of id by GET method when it's clicked
	// echo"<td>".$data_review["review"]."</td>";
	echo"<td><a href=".$detailPage.$id[$i]."\">Detail</a></td>";
	echo"<td><a href=".$reviewPage.$id[$i]."\">Review</a></td>";
	$i = $i +1;
        echo"</tr>";
}
echo"</table>";

?>
	<br>
	<div class="btn-group">
	<a href="index.php" button type="button" class="btn btn-default">Back to Top</a>
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
    <ul class="nav navbar-nav navbar-left">
      <p class="navbar-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright (c) totu</p>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


</body>
</html>
