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
include 'DBconn.php';
$sql = "SELECT Customer_name, Customer_ID, Customer_Email, Appointment_Date, Space_Reserved, Event_Type, Event_Supplies FROM Assignment3Customers WHERE Customer_name='{$_SESSION[data]}'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Welcome, " . $_SESSION['data'];
		echo '<table align="center"
			cellspacing="3" cellpadding="3"
		width="75%">
		<tr><td align ="left"><b>Name
		</b></td><td align="left">
		<b>Customer ID</b></td><td align="left">
		<b>Customer Email</b></td><td align="left">
		<b>Appointment Date</b></td><td align="left">
		<b>Space Reserved</b></td><td align="left">
		<b>Event Type</b></td><td align="left">
		<b>Event Supplies</b></td></tr>
		';

        echo '<tr><td align="left">' .
					$row['Customer_name'] . '</td><td align = "left">' .
					$row['Customer_ID'] . '</td><td align = "left">' .
					$row['Customer_Email'] . '</td><td align = "left">' .
					$row['Appointment_Date'] . '</td><td align = "left">' .
					$row['Space_Reserved'] . '</td><td align = "left">' .
					$row['Event_Type'] . '</td><td align = "left">' .
					$row['Event_Supplies'] . '</td><td align = "left">' ;
			echo '</tr>';
			echo '</table>';

$conn->close();
?>


<form action="ConfirmAdd.php" method = "POST">
		<label><input type="submit"  value="Change Supplies" />
		<input type ="text" name="Addition"></label><br>

	</form>


	 <form action="ConfirmDelete.php" method = "POST">
	 		<label><input type="submit"  value="Delete Supplies" /><br>

	</form>
	
	</form>
	<form action="Schedule.php">
	<label><input type = "submit" value = "Go Reserve"></label>
	</form>
	<form action="Assign2.html">
	<label><input type = "submit" value = "Logout"/></label>
   </div>
    </body>
</html>










