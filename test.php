<?php
$servername = "sql1.njit.edu";
$username = "jdh26";
$password = "TDibaq66";
$dbname = "jdh26";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Customer_name, Customer_ID, Customer_Email, Appointment_Date, Space_Reserved, Event_Type, Event_Supplies FROM Assignment3Customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["Customer_name"]. 
            " - ID " . $row["Customer_ID"]. " " .
            " Email: " . $row["Customer_Email"]. 
            " Date: " . $row["Appointment_Date"]. 
            " Area: " . $row["Space_Reserved"] .
            " Event Type: " . $row["Event_Type"] .
            "Supplies Needed: " . $row["Event_Supplies"] .
             
            "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>