<?php 
session_start(); 
include "db_con.php";

if (isset($_POST['user']) && isset($_POST['pass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['user']);
	$pass = validate($_POST['pass']);

	if (empty($uname)) {
		header("Location: dashboard.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: dashboard.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM user WHERE Username='$uname' AND Password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['Username'] === $uname && $row['Password'] === $pass) {
            	$_SESSION['Username'] = $row['Username'];
            	$_SESSION['Name'] = $row['Name'];
            	$_SESSION['ID'] = $row['ID'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: dashboard.php?error=Incorect User name or Password");
		        exit();
			}
		}else{
			header("Location: dashboard.php?error=Incorect User name or Password");
	        exit();
		}
	}
	
}else{
	header("Location: home.php");
	exit();
}