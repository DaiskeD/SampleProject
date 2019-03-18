<?php
session_start();
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
 <title> Form feedback</title>


</head>
<body>
<?php
if ( empty($_POST['user']) && empty($_POST['pass']) ) {
	$selected = $_POST['txn'];
	if ($selected === "Create The Account") {
		header("Location: https://web.njit.edu/~jdh26/IT20218/CreateAccount.php");
	} else {
		
 header("Location: https://web.njit.edu/~jdh26/IT20218/Assign2.html");
	}
}
include 'DBconn.php';
if ( !empty($_POST['user']) && !empty($_POST['pass']) ) {

	$name = $_POST["user"];
	$pass = $_POST["pass"];
	$selected = $_POST['txn'];
	$_SESSION['data'] = $name;
	


	echo "$name $pass";
	 $sql = "SELECT * FROM Assignment3Customers WHERE Customer_name = '$name' AND Customer_ID = '$pass'";

	      $response = mysqli_query($conn, $sql);

			if ($response){
	        $row = $response->fetch_assoc();
	        $rcount = $response->num_rows;
	        }

	      if($rcount == 1){

		  switch ($selected) {
		      case "Access Account Information":
		      	  header("Location: https://web.njit.edu/~jdh26/IT20218/View.php");
		          break;
		      case "Reservation":
		          header("Location:https://web.njit.edu/~jdh26/IT20218/Schedule.php ");
		          break;
		      case "Create Account":
		          header("Location: https://web.njit.edu/~jdh26/IT20218/CreateAccount.php");
		          break;
		      default:
		         header("Location: https://web.njit.edu/~jdh26/IT20218/CreateAccount.php");
}
			    }
	    else{
			   echo "You have entered an incorrect username and password. Please try again.";
			   echo mysqli_error($conn);

	      }
	    }



  ?>
</body>
</html>
