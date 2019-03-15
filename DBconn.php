<?php
$servername = "sql1.njit.edu";
$username = "jdh26";
$password = "TDibaq66";
$dbname = "jdh26";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>


</html>
