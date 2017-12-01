
<?php

session_start();


echo "Välkommen ".$_SESSION['username'];
?>

<!Doctype html>

<html>

	<head>



	</head>


	<body>
	
		<Form method="POST" action="submit.php">
		
		Användarnamn: <input type="text" name="username"><br/>

		Lösenord: <input type="password" name="password"><br/>
		
		<Input type="submit">
			
		</form>
	
	</body>
	



</html>

