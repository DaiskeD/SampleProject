
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
 <title> Form feedback</title>


</head>
<body>
<?php
include 'DBconn.php';

if ( !empty($_POST['name']) && !empty($_POST['loginpass']) ) {

	$name = $_POST["name"];
	$pass = $_POST["loginpass"];
	echo "$name $loginpass";

    $sql = "SELECT * FROM CustomerLogins WHERE Username = '$name' AND Password = '$pass'";

	   $response = mysqli_query($conn, $sql);

		if ($response){
        $row = $response->fetch_assoc();
        $rcount = $response->num_rows;
        }

      if($rcount == 1){
           header("Location: https://web.njit.edu/~jdh26/IT20218/Assign2.html");
		    }
    else{
		   echo "You have entered an incorrect username and password. Please try again.";
		   echo mysqli_error($conn);

      }
    }
  ?>
</body>
</html>