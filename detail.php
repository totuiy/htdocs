<!DOCTYPE html>
<html>
  <head>
    <title>Detail of the Driver</title>
    
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

<br><br>
<div Align="center">
<h2>Detail of The Driver<br><small>All Reviews and Ratings</small></h2>
</div><br><br>

<?php

require_once('config.php');
require_once('functions.php');

session_start();

$data_id = $_GET["id"];

// connect database
// $dbh = connectDb();
$link = mysql_connect('localhost', 'root', 'root');
if (!$link) { die('Failed to connect'.mysql_error()); }
$db_selected = mysql_select_db('boda', $link);
if (!$db_selected){ die('Failed to select a database'.mysql_error()); }

// Pick dates of reviews
$result = mysql_query("SELECT * FROM reviews WHERE id = $data_id");
if (!$result) { die('Failed of query: '.mysql_error()); }
$data = mysql_fetch_assoc($recordSet);

// Print the Result
$table = '"table table-striped"';
$align = '"left"';
$type = '"button"';
$class = '"btn btn-primary"';
echo"<table class=".$table.">";
echo"<tr><td align=".$align."><strong>Date of Review</strong></td><td><strong>Rating</strong></td><td><strong>Comment</strong></td></tr>";
while ($row = mysql_fetch_assoc($result)) {
	echo"<tr>";
	echo"<td>".$row["date"]."</td>";
	echo"<td>".$row["rate"]."</td>";
	echo"<td>".$row["review"]."</td>";
	echo"</tr>";
}
echo"</table>";

?>

	<!-- button to back -->	
	<br>
	<div Align="right">
	<div class="btn-group">
	<a href="search.php" button type="button" class="btn btn-default">Back</a>
	</div></div>
	</form>

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
  </body>
</html>
