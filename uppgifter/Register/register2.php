
<?php

session_start();


echo "hej ".$_SESSION['username'];
?>

<!Doctype html>

<html>

	<head>



	</head>


	<body>
	
		<Form method="POST" action="submit.php">
		
		Användarnamn: <input type="text" name="username"><br/>
	
		Fullständigt namn: <input type="text" name="full_name"><br>
		
		Mail: <input type="text" name="mail"><br/>
		
		Födelsedatum: <input type="date" name="date"><br/>
		
		Lösenord: <input type="password" name="password"><br/>
		
			<button>Submit</button>
			
		<?php
		

		$_SESSION["password"] = ""
		
		?>
			
			
	</body>



<html>