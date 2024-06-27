<?php
	 include_once "../config/dbconnect.php";

	session_start();
	error_reporting(0);

if (isset($_POST["loginbtn"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	// Create connectionn
	$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($conn, $sql);  
	$count = mysqli_num_rows($result);

	if($count > 0){
		$row = mysqli_fetch_assoc($result);
		$_SESSION["userID"] = $row['userID'];
		$_SESSION["username"] = $row['username'];
		$_SESSION["password"] = $row['password'];
		header("Location: ../staffDashboard.php");
			if($row['userID']==999) { 
				header("Location: ../adminDashboard.php");
			}
	} 
	else{
		echo "<script>
						alert('Incorrect username/password');
						window.location.href='../index.php';
					  </script>";
	}
}
else{
}
?>