<?php
    include_once "../config/dbconnect.php";

    $roleID=$_POST['roleID'];
    $position= $_POST['position'];
    $roleDescription= $_POST['roleDescription'];

   
    $updateItem = mysqli_query($conn,"UPDATE role SET position='$position', roleDescription='$roleDescription' WHERE roleID=$roleID");


    if($updateItem)
    {
        echo "true";
    }
?>