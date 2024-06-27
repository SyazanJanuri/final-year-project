<?php
    include_once "../config/dbconnect.php";

    $userID=$_POST['userID'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    $userEmail= $_POST['userEmail'];
    $userPhoneNum= $_POST['userPhoneNum'];
    $roleID= $_POST['roleID'];

   
    $updateItem = mysqli_query($conn,"UPDATE user SET username='$username', password ='$password', userEmail='$userEmail', userPhoneNum='$userPhoneNum', roleID='$roleID' WHERE userID=$userID");


    if($updateItem)
    {
        echo "true";
    }
?>