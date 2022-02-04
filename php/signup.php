<?php
	include "connection.php";
	
		$email=$_POST['email'];
		$password=$_POST['password'];
		$conform_password=$_POST['confpassword'];
		
		if ($email=='' || $password=='' || $conform_password=='')
		{
			echo "<br><br><br><h1 align='center'> Incomplete Credidential!</h1>";
		}
		
		else
		{			
			if ($password==$conform_password)
			{
				session_start();
				$_SESSION['email']=$email;
				header("Location: ../welcome.php");
				
				$query="INSERT INTO users (email,password) VALUES ('$email','$password')";
				$exec_query=mysqli_query($conn,$query);	
			}
			else
			{
				echo "<br><br><br><h1 align='center'>Please Confrom the Password</h1>";
			}
		}
?>