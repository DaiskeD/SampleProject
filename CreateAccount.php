
<!DOCTYPE html>
<html>
    <head>
		<link rel = "stylesheet" type = "text/css" href = "Assign3.css"/>
		<meta charset="UTF-8">
        <title>Create Account</title>
    </head>
    <body>
<div id = "main">
<?php
echo "Welcome, Please enter your information below";
?>
<form action="Create.php" method = "POST">
		Enter Name: <input type ="text" name="YourName"><br>
		Enter 8 didget Customer ID: <input type ="text" name="CustomerId"><br>
		Email: <input type ="email" name="Email"><br>
		<input type="submit"  value="Sign up" />

	</form>




   </div>
    </body>
</html>
