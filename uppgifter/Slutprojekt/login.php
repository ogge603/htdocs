<?php

session_start();
// Besöker sidan för första gången
if(!isset($_SESSION['loggedIn'])){
	$_SESSION['loggedIn'] = false;
}

// Om man redan är inloggad
if($_SESSION['loggedIn']){
	header("Location: /forum/forum.php");
}		

// Användare vill registrera sig
if( isset($_POST['name']) && isset($_POST['date']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){
	
	
	// Skapa en kopppling till databasen
	$dbc = mysqli_connect("localhost","root","","forum");

	// Identifiera data
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$date = $_POST['date'];
	
	// Formulera fråga
	$query = "INSERT INTO users 
	(user_nickname,user_real_name,user_mail,user_password,user_birthdate) VALUES 
	('$username','$name','$email','$password','$date')";

	// Kolla om frågan inte fungerade
	if(!mysqli_query($dbc,$query)){
		die("Något gick fel...");// Stoppa inläsningen av sidan och skriv ut "Något gick fel..."
	}

}
// Användare vill logga in
else if( isset($_POST['username']) && isset($_POST['password'])){

	// Skapa en kopppling till databasen
	$dbc = mysqli_connect("localhost","root","","forum");
	
	// Identifiera data
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Formulera fråga
	$query = "SELECT * FROM users WHERE user_nickname = '$username' AND user_password = '$password'";
	
	// Ställ frågan
	$result = mysqli_query($dbc,$query);
	
	// Finns en rad med resultat så har användaren skrivit rätt information
	if($row = mysqli_fetch_array($result)){
		$_SESSION['loggedIn'] = true;
		$_SESSION['username'] = $username;
		$_SESSION['user_id'] = $row['user_id'];
	}
	else{
		die("Fel uppgifter, försök igen...");// Stoppa inläsningen av sidan och skriv ut "Fel uppgifter, försök igen..."
	}

}

?>

<!DOCTYPE html>
<html>

	<head>
		<title> Forum </title>
	</head>

	<body>

		Registreringsformulär:
		<form action = "login.php" method = "POST">
			Användarnamn:<input type = "text" name = "username" > </input><br>
			Fullständigt namn:<input type = "text" name = "name" > </input><br>
			Födelsedatum:<input type = "date" name = "date" > </input><br>
			Mail:<input type = "email" name = "email" > </input><br>
			Lösenord:<input type = "password" name = "password" > </input><br>
			<input type="submit" value = "Registrera" />
		</form>

		<br><br><br>
		
		Loginformulär:
		<form action = "login.php" method = "POST">
			Användarnamn:<input type = "text" name = "username" > </input><br>
			Lösenord:<input type = "password" name = "password" > </input><br>
			<input type="submit" value = "Logga in" />
		</form>

	</body>

</html>