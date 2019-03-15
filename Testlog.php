
<!DOCTYPE HTML>
<html>
<head>
<title>LoginForm.php</title>
<!-- Using external stylesheet to make the registration form look attractive -->
<link rel = "stylesheet" type = "text/css" href="Assign2.css"/>

</head>
<body>

<!-- Make a note that the method type used is post, action page is Login.php and validate() function will get called on submit -->
<div style="text-align:center"><h1>PHP Login Form using MySQL</h1></div>
<br>
<form name="login" method = "post" action="" onsubmit="blah();" >
<div>Username: <input type="text" name="username" id = "username" />  </div>
<div>Password: <input type="password" name="password" id = "password" /> </div>
<div><input type="submit" value="Login"></input> <input type="reset" value="Reset"></input></div>
</form>
</body>
<script type = "text/javascript" src = "work.js"></script>
</html>
