<!DOCTYPE html>
<html>
  <head>	
	<title>Result of Search</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
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
    <a class="navbar-brand" href="boda-border.com" ><font color="white">Boda-Border</font></a>
  </div>
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li><a href="register.php">Register Driver</a></li>
    </ul>
 
  </div><!-- /.navbar-collapse -->
</nav> 

<?php

$link = mysql_connect('localhost', 'dbuser', '5TNKr847');
if (!$link) {
    die('Failed to connect'.mysql_error());
}



$db_selected = mysql_select_db('boda', $link);
if (!$db_selected){
    die('Failed to select a database'.mysql_error());
}

$nm = $_POST["nm"];

$result = mysql_query("SELECT * FROM drivers WHERE name LIKE '%$nm%'");
if (!$result) {
    die('Failed of query: '.mysql_error());
}

// Print the Result
$table = "table table-striped";
echo"<table class=".$table.">";
echo"<tr><td>Name</td><td>Phone</td><td>Number</td><td>Area</td><td>Rate</td><td>Review</td></tr>";
while ($row = mysql_fetch_assoc($result)) {
	echo"<tr>";
	echo"<td>".$row["name"]."</td>";
	echo"<td>".$row["phone"]."</td>";
	echo"<td>".$row["number"]."</td>";
	echo"<td>".$row["area"]."</td>";
	echo"<td>".$row["rate"]."</td>";
	echo"<td>".$row["review"]."</td>";
	echo"</tr>";
}
echo"</table>";


$close_flag = mysql_close($link);


?>

<a href="index.php" button type="button" class="btn btn-default">Back</a>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


</body>
</html>

