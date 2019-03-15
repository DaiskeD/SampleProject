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
$AddType = $_SESSION['Tyyy'];
$AddSupp = $_SESSION['supp'];
$reminder = $_SESSION['data'];
$AddDate = $_SESSION['Time'];
$AddSpace = $_SESSION['Spaaa'];
$sql = "UPDATE Assignment3Customers SET Event_Supplies='$AddSupp'
WHERE Customer_name='$reminder'";


if ($conn->query($sql) === TRUE) {
    header("Location: View.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "UPDATE Assignment3Customers SET Event_Type='$AddType'
WHERE Customer_name='$reminder'";

if ($conn->query($sql) === TRUE) {
    header("Location: View.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "UPDATE Assignment3Customers SET Appointment_Date='$AddDate'
WHERE Customer_name='$reminder'";

if ($conn->query($sql) === TRUE) {
    header("Location: View.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "UPDATE Assignment3Customers SET Space_Reserved ='$AddSpace'
WHERE Customer_name='$reminder'";

if ($conn->query($sql) === TRUE) {
    header("Location: View.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


 $conn->close();
 ?>
  </body>
</html>