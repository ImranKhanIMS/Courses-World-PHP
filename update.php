<!DOCTYPE html>
<html class="no-js">
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Father</title>

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
   
   <!-- Page Title -->
	 <br>
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1>Add Course</h1>
					</div>
				</div>
			</div>
		</div>
						
		<div class="container text-center imi">
			<div class="row">
				<div class="col-md-6">
				  <br><br><br>	
	<form method="POST" action="update.php" enctype="multipart/form-data">
	
		<input type="text" name="number" placeholder="Course Number"><br><br>
		<input type="text" name="name" placeholder="Course Name"><br><br>
		<input type="text" name="language" placeholder="Course Language"><br><br>
		<h1 class="imi1">Image</h1>
		<input type="file" name="file"><br>
		<input class="btn btn-lg animation animated-item-3" type="submit" name="submit" value="Update Course">
	</form>
				  <br><br><br>
				</div>
			</div>
		</div>
	
	<hr>
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
	include "php/connection.php";
		
	if (isset($_POST['submit']))
	{
		$nam=$_POST['name'];
		$lang=$_POST['language'];
		$num=$_POST['number'];

		$name = $_FILES['file']['name'];
		$tmp = $_FILES['file']['tmp_name'];
		
		move_uploaded_file($tmp,"img/courses/".basename($name));

		$query = "UPDATE courses SET name='$nam',language='$lang',image='$name' WHERE number='$num' ";
		$query_exec=mysqli_query($conn,$query);
	}

?>