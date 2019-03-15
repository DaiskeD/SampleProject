<?php
$uname = $_REQUEST['uname'];
$msg = $_REQUEST['msg'];

$con = mysql_connect('sql1.njit.edu','jdh26','TDibaq66');
mysql_select_db('StudentChat',$con);

mysql_query('INSERT INTO StudentChat ('Name', 'msg') VALUES ('$uname', '$msg'");

$result1 = mysql_query("SELECT * FROM StudentChat");

while($extract= mysql_fetch_array($result1)){
	echo $extract['username'] . ". " $extract['msg'] . "<br>";
	
}

?>	