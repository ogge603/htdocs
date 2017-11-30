<?php

	$dbc = mysqli_connect("localhost","root","","register");

		
	if(!$dbc){
		
		die("connecetion failed.....");
		
	}
	
	$username = $_POST['username'];

	$full_name = $_POST['full_name'];
	
	$mail = $_POST['mail'];
				
	$date = $_POST['date'];
				
	$password = $_POST['password'];
				
			$query = "INSERT INTO users(username,fullname,mail,date,password) VALUES('$username','$full_name','$mail','$date','$password');";
			
		mysqli_query($dbc,$query);

				
				
				
				
				
				
				
				
				
				
				
				
				
				
?>		






