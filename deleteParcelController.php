<?php

    include_once "../config/dbconnect.php";
    
    $id=$_POST['record'];
    $query="DELETE FROM parcel where parcelID='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Parcel Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>