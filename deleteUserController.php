<?php

    include_once "../config/dbconnect.php";
    
    $id=$_POST['record'];
    $query="DELETE FROM user where userID='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"User Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>