<?php
include 'DBconn.php';

$sql = "SELECT Name FROM StudentChat";
$result = $conn->query($sql);
$row = $result->fetch_assoc(); 
echo 'Current Users: ';
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo $row['Name'] . " ";
}
}
		
?>


<!DOCTYPE html>
<html>
    <head>
	<title>Simple Chat</title>
	<meta charset = "utf-8" />
	<script>
	function SubmitChat() {
	if(form1.uname.value == '' || form1.pass.value == '' || form1.msg.value == '') {
		alert("Please fill in all blanks");
		return;
		
	}
	}
	</script>
	<script>
	function ListenChat() {
		if (form2.ListenName.value == '') {
			alert("Please enter a valid user");
			return;
			
		}
	// following code should me XML to access information from database and change the text as needed. 
	//var xhttp = new XMLHttpRequest();
 // xhttp.onreadystatechange = function() {
  //  if (this.readyState == 4 && this.status == 200) {
  //    document.getElementById("ListenName").innerHTML =
   //   this.responseText;
	//}
	//xhttp.open("GET", "", true);
 // xhttp.send();
  }
  
	</script>
	
</head>
<body>
<div id = "OnlineUsers">


</div>
<button type="Button">

</div> 
<div id = "Send" >
<form name ="form1" method = "POST">
<fieldset>

<label>Enter Username: <input type = "text" placeholder = "username" name="uname"/></label><br>

<label>Password : <input type = "text" placeholder = "password" name = "pass" /></label><br>
 <textarea name ="msg" rows ="4" cols = "20">
 
 
 </textarea>
 <input name="submitlog" type="submit"  id="submitlog" value="Send" onclick="SubmitChat()" />

</fieldset>
</form>
</div>
<div id = "Reciever">
<form name = "form2">
<fieldset>
<label>Enter Valid Name: <input type = "text" placeholder = "username" name="ListenName"/><br>
 
<label>Msg Recieved: <br><textarea id ="msgrec" rows ="4" cols = "20"readonly>
 
 
 </textarea></label>
 
 
 <input name="submitname" type="submit" onclick="ListenChat()" id="submitname" value="Listen" /></label><br>


</fieldset>
</form>
</div>
<script type="text/javascript">









</body>
</html>
