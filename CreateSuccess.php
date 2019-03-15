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
echo "Congrats  " . $_SESSION['Yourname'] . "Your account has been successfully made! Please click link below to login!";
?>
<form action="Assign2.html">
<input type="submit"  value="Continue" />
</form>
</body>
</html>
