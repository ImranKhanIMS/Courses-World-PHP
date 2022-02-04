<?php
		session_start();
		if (isset($_SESSION['password']))
		{	
?>
<!DOCTYPE html>
<html class="no-js">
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Baap Panel</title>

    <link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">
	<script src="//use.edgefonts.net/bebas-neue.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/icomoon-social.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	
    
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87290449-2', 'auto');
  ga('send', 'pageview');
	</script>

	
	<style>
		.imi
		{
			font-size:30px;
		}
		.imi1
		{
			color:red;
		}
	</style>
</head>
		<body> 	
	<div class="container text-center imi">
		<div class="row">
			<div class="col-md-6">
			  <br><br><br>
			  
				<form method="POST" action="add1.php" enctype="multipart/form-data">
					<input name="add" class="btn btn-lg animation animated-item-3" type="submit" value="Add New Course"><br><br>
				</form>
				
				<form method="POST" action="update.php" enctype="multipart/form-data">
					<input name="update" class="btn btn-lg animation animated-item-3" type="submit" value="Update Course"><br><br>
				</form>
				
				<form method="POST" action="delete.php" enctype="multipart/form-data">
					<input name="delete" class="btn btn-lg animation animated-item-3" type="submit" value="Delete Course"><br><br>
				</form>
			</div>
		</div>
	</div>

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
		
		<!-- Scrolling Nav JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>		

    </body>
</html>
<?php
	}
	else
	{
		header("Location: teach.php");
	}
?>	