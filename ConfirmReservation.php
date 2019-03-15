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
if ( empty($_POST['Type']) ) {
 echo "Warning, you need to add a type of event, please go back! ";
 }
if ( empty($_POST['Supplies']) ) {
 echo "Warning, Go back if you need Supplies for your Event! ";
 }
 if ( empty($_POST['Space']) ) {
 echo "Warning, you Reserve a space, please go back! ";
 }
 
include 'DBconn.php';
if ( !empty($_POST['Type']) ) {

$Typing = $_POST["Type"];
$_SESSION['Tyyy'] = $Typing;
}
if ( !empty($_POST['Supplies']) ) {

$Supplying = $_POST["Supplies"];
$_SESSION['supp'] = $Supplying;
}

$Dating = $_POST["Time"];
$_SESSION['Time'] = $Dating;

if ( !empty($_POST['Space']) ) {

$Typing = $_POST["Space"];
$_SESSION['Spaaa'] = $Typing;
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
			echo "Are you sure you want to add<b> " . $_SESSION['Tyyy'] ."</b> as your type of event, <b>" . $_SESSION['supp'] . "</b> as your supplies, <b>"
			. $_SESSION['Time'] . "</b> as the date it takes place and  <b>" . $_SESSION['Spaaa'] . "</b> as the space you would like to reserve?";
$conn->close();
?>
	<form action="Reserve.php" method = "POST">
		<label><input type="submit"  value="Yes please" /></label>
	</form>
		<form action="View.php">
		<label><input type="submit"  value="No, Go back" /></label>
		</form>
	</div>
   </body>
</html>
