<?php
session_start();
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
 <title> Add Supplies</title>


</head>
<body>
<?php
include 'DBconn.php';
$Adder = $_SESSION[Addd];
$reminder = $_SESSION['data'];
$sql = $sql = "UPDATE Assignment3Customers SET Event_Supplies='$Adder'
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

