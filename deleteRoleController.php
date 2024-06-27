<?php

    include_once "../config/dbconnect.php";
    
    $id=$_POST['record'];
    $query="DELETE FROM role where roleID='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"User Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>