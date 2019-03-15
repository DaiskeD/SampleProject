<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
		<link rel = "stylesheet" type = "text/css" href = "Assign3.css"/>
		<meta charset="UTF-8">
        <title>Logged in</title>
    </head>
    <body>
<div id = "main">
<?php
echo "Welcome, " . $_SESSION['data'] . "! Please enter reservation information Below";
?>
<form action="ConfirmReservation.php" method = "POST">

		What time will it take place? :<input type ="Date" name="Time"><br>
		What kind of event is it?:<input type ="text" name="Type"><br>
		What Supplies are needed for your event?<input type = "text" name="Supplies"><br>
		What Space would you like to Reserve?<input type="text" name="Space"></br>
		<input type="submit"  value="Reserve" />

	</form>




   </div>
    </body>
</html>

