<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Thank You for Your Review</title>

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
<h3>Thank you for your review!</h3>
</div>

	<!-- button to back -->	
	<br><br>
	<div align="center">
	<div class="btn-group">
	<a href="index.php" button type="button" class="btn btn-default">back to top</a>
	</div></div>

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

<?php
session_start();

$link = mysql_connect('localhost', 'root', 'root') or die('fail to connect MySQL');
$sdb = mysql_select_db('boda', $link) or die("failed to chose database");

$id = $_SESSION['data'];
$rate = $_POST['rate'];
$review = $_POST['review'];

$sql = "insert into reviews
	(id, rate, review)
	values
	(:id, :rate, :review)";
$stmt = $dbh->prepare($sql);
$params = array(
	":id" => $id,
	":rate" => $rate,
	":review" => $review
);
$stmt->execute($params);

// calcurate and insert new rate
echo '<br>id is '.$id;
// $sql = 'SELECT * FROM drivers WHERE id='.$id;
$result = mysql_query('SELECT * FROM drivers WHERE id=2');
if (!$result) { die('Faile of query: '.mysql_error()); }
$data = mysql_fetch_assoc($result);
echo '<br>old_rate is '.$row['rate'];
$new_rate = $old_rate["rate"] + $rate;
$new_rate = $new_rate / 2;
echo '<br>new_rate is '.$new_rate;

$sql2 = 'UPDATE drivers SET rate='.$new_rate.;
mysql_query($sql2);

?>
