<?php
session_start();
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<link rel = "stylesheet" type = "text/css" href = "Assign3.css"/>
 <title> Are you sure...</title>


</head>
<body>
<div id= "main">
<?php
if ( empty($_POST['Deletion']) ) {
 echo "You cannot delete nothing. please go back! ";

 }

include 'DBconn.php';
if ( !empty($_POST['Deletion']) ) {

$Deleting = $_POST["Deletion"];
$_SESSION['Del'] = $Deleting;
}



$sql = "SELECT Customer_name, Customer_ID, Customer_Email, Appointment_Date, Space_Reserved, Event_Type, Event_Supplies FROM Assignment3Customers WHERE Customer_name='{$_SESSION[data]}'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

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
			echo "Are you sure you would like to delete " . $Deleting . " your Supplies?";
$conn->close();
?>
	<form action="Delete.php" method = "POST">
		<label><input type="submit"  value="Yes Delete it" /></label>
	</form>
		<form action="View.php">
		<label><input type="submit"  value="No, Go back" /></label>
		</form>
	</div>
   </body>
</html>

