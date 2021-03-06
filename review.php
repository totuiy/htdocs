<!DOCTYPE html>
<html>
  <head>        
	<title>Review Driver</title>

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
  </div><!-- navbar-collapse -->
</nav> 

<br><br>
<div Align="center">
<h2>Review driver<br><small>Please rate the driver and comment</small></h2>
</div><br><br>

<?php

session_start();
$_SESSION['data'] = $_GET["id"];

?>
	<!-- Forms -->
	<!-- Rate -->
	<form action="review_do.php" class="form-horizontal" role="form" method="POST">
	<div class="form-group">
		<label for="inputRate3" class="col-sm-3 control-label">Rate</label>
		<div class="col-sm-2">
			<select class="form-control" name="rate">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>
		</div>
	    <label class="col-sm-7 control-label"></label>
	</div>

	<!-- comment -->
	<div class="form-group">
	    <label for="inputReview" class="col-sm-3 control-label">Comment</label>
	    <div class="col-sm-6">
	      <textarea type="text" class="form-control" name="review" placeholder="Comment" rows="3"></textarea>
<!--	      <input type="text" class="form-control" name="review" placeholder="Comment"> -->
	    </div>
	    <label class="col-sm-3 control-label"></label>
	  </div>
	
	<div class="form-group">
	    <div class="col-sm-offset-3 col-sm-3">
	      <button type="submit" class="btn btn-default" type="submit">Submit</button>
	    </div>
	  </div>

	<br>
	<div class="btn-group">
	<a href="index.php" button type="button" class="btn btn-default">Back to Top</a>
	</div><br><br>

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
