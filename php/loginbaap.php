<?php
	include "connection.php";
	
		$email=$_POST['email'];
		$password=$_POST['password'];
		
		if ($email=='' || $password=='')
		{
			echo "<br><br><br><h1 align='center'> Incomplete Credidential!</h1>";
		}
		
		else
		{			
			$query="SELECT * FROM baap WHERE email='$email' AND password='$password'";
			$exec_query=mysqli_query($conn,$query);
			$s=mysqli_num_rows($exec_query);
			
			if ($s>=1)
			{
				session_start();
				$_SESSION['password']=$password;
				header("Location: ../admin.php");
			}
			else
			{
				echo "<br><br><br><h1 align='center'>Invalid User Name OR Password<br>Plz Try Again!</h1>";
			}
		}
?>