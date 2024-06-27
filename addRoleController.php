<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $position = $_POST['position'];
        $roleDescription = $_POST['roleDescription'];
       
         $insert = mysqli_query($conn,"INSERT INTO role
         (position, roleDescription)   VALUES ('$position', '$roleDescription')");
 
        if(!$insert)
        {
            echo mysqli_error($conn);
            header("Location: ../adminDashboard.php?size=error");
        }
        else
        {
            echo "Records added successfully.";
            header("Location: ../adminDashboard.php?size=success");
        }
     
    }
        
?>