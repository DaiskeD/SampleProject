<?php
session_start();
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
 <title> Reserve Event</title>


</head>
<body>
<?php
include 'DBconn.php';
$username = $_POST['YourName'];
$CustomerID = $_POST['CustomerId'];
$EMail = $_POST['Email'];
$sql = "INSERT INTO `Assignment3Customers`(`Customer_name`, `Customer_ID`, `Customer_Email`) VALUES ('$username','$CustomerID','$EMail')";

if ($conn->query($sql) === TRUE) {
	
    header("Location: CreateSuccess.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

 $conn->close();
 ?>

  </body>
</html>

