<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $username = $_POST['username'];
        $password = $_POST['password'];
        $userEmail = $_POST['userEmail'];
        $userPhoneNum = $_POST['userPhoneNum'];
        $roleID = $_POST['roleID'];
        $date = date("Y-m-d");
       
         $insert = mysqli_query($conn,"INSERT INTO user (username, password, userEmail, userPhoneNum, roleID, registerDate) VALUES ('$username', '$password', '$userEmail', '$userPhoneNum', '$roleID', '$date') ");
 
        if(!$insert)
        {
            echo mysqli_error($conn);
            header("Location: ../adminDashboard.php?user=error");
        }
        else
        {
            echo "Records added successfully.";
            header("Location: ../adminDashboard.php?user=success");
        }
     
    }
        
?>