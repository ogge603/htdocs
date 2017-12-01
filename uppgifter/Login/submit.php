<?php

session_start();



	$dbc = mysqli_connect("localhost","root","","register");

		
	if(!$dbc){
		
		die("connecetion failed.....");
		
	}
	
	$username = $_POST['username'];
	
	$password = $_POST['password'];
				
			
	$question = mysqli_query($dbc,"SELECT * FROM users WHERE username = '$username' and password = '$password'");
	
	$row = mysqli_fetch_array($question);
	
	if($row  == null){
		
		echo("Failed");
		
	}
	
	else{
		
		echo ("Successfully logged in");
				$_SESSION["username"] = $username;

		
	} 
				
				
				
				
			
?>		

