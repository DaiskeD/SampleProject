<?php
session_start();
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
 <title> Delete</title>


</head>
<body>
<?php
include 'DBconn.php';
$Deleter = $_SESSION['Del'];
$reminder = $_SESSION['data'];
 $sql ="UPDATE Assignment3Customers SET Event_Supplies=''
WHERE Customer_name='$reminder'" ;
if ($conn->query($sql) === TRUE) {
    header("Location: View.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

 $conn->close();
 ?>
  </body>
</html>
$str=preg_replace('/\s+/', '', $str);
DELETE Event_Supplies FROM Assignment3Customers
WHERE Customer_name='$reminder'