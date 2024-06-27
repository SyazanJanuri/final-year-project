<?php
    include_once "../config/dbconnect.php";
    include_once "../twilio-php-main/src/Twilio/autoload.php";
    // Your Account SID and Auth Token from console.twilio.com
    $sid = "AC2521ec1c3c21ebd7b340d1caad1c1884";
    $token = "e851720c810ef007893b2f357e7be2e4";
    $client = new Twilio\Rest\Client($sid, $token);

    $parcelID=$_POST['parcelID'];
    $recipientName= $_POST['recipientName'];
    $collectionDate= $_POST['collectionDate'];
    $parcelStatus= $_POST['parcelStatus'];
    $phoneNum= $_POST['phoneNum'];
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $sendDate = date("Y-m-d H:i:s");


    $updateItem = mysqli_query($conn,"UPDATE parcel SET 
        parcelID=$parcelID, 
        recipientName='$recipientName',
        collectionDate='$collectionDate',
        parcelStatus=1
        WHERE parcelID=$parcelID");

    //insert notification table
    mysqli_query($conn,"INSERT INTO notifications
    (sendDate, notificationStatus, parcelID)   VALUES ('$sendDate', 'successful', '$parcelID' )");

     //Notification_collected_function_here()
     $message = $client->messages->create(
        '+6' . $phoneNum,
        [
            'from' => '+12027914477',
            'body' => "Your parcel has been collected by " . $recipientName . " on " . $collectionDate . ". Thank you!"
        ]
    );
    
    if($message){
        echo 'message sent';
    }else{
        echo 'something happend';
    }

    if($updateItem)
    {
        echo "true";
    }
?>