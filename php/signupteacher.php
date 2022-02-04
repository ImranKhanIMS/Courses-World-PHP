<?php
	include "connection.php";
	
		$email=$_POST['email'];
		$password=$_POST['password'];
		$conform_password=$_POST['confpassword'];
		$contact=$_POST['contact'];
		$whatsapp=$_POST['whatsapp'];
		$easypaisa=$_POST['easypaisa'];
		$jazzcash=$_POST['jazzcash'];
		$bank=$_POST['bank'];
		$bankname=$_POST['bankname'];
		
		if ($email=='' || $password=='' || $conform_password=='' || $contact=='')
		{
			echo "<br><br><br><h1 align='center'> Incomplete Credidential!</h1>";
		}
		
		else
		{			
			if ($password==$conform_password)
			{
				session_start();
				$_SESSION['email']=$email;
				header("Location: ../add.php");
				
				$query="INSERT INTO teachers (email,password,contact,whatsapp,easypaisa,jazzcash,bank,bank_name) VALUES ('$email','$password','$contact','$whatsapp','$easypaisa','$jazzcash','$bank','$bankname')";
				$exec_query=mysqli_query($conn,$query);	
			}
			else
			{
				echo "<br><br><br><h1 align='center'>Please Confrom the Password</h1>";
			}
		}
?>