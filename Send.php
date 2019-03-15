<?php
$uname = $_REQUEST['uname'];
$msg = $_REQUEST['msg'];
include 'DBconn.php';
$sql =" UPDATE StudentChat SET Chat = $msg WHERE Name= $uname";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
while ($extract = mysql_fetch_array($row)){
	echo $extract['name'] . ": " / $extract['Chat;]
}

?>