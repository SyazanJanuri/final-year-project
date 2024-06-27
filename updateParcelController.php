<?php
    include_once "../config/dbconnect.php";

    $parcelID=$_POST['parcelID'];
    $trackNum= $_POST['trackNum'];
    $phoneNum= $_POST['phoneNum'];

   
    $updateItem = mysqli_query($conn,"UPDATE parcel SET 
        trackNum='$trackNum',
        phoneNum='$phoneNum'
        WHERE parcelID=$parcelID");


    if($updateItem)
    {
        echo "true";
    }
?>