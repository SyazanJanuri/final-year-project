<?php
    include_once "../twilio-php-main/src/Twilio/autoload.php";
    include_once "../config/dbconnect.php";
   
    
    // // Your Account SID and Auth Token from console.twilio.com
    // $sid = "AC2521ec1c3c21ebd7b340d1caad1c1884";
    // $token = "e851720c810ef007893b2f357e7be2e4";
    // $client = new Twilio\Rest\Client($sid, $token);
   
    $parcelID=$_POST['record'];
    //echo $order_id;
    $sql = "SELECT * from parcel where parcelID='$parcelID'"; 
    $result=$conn-> query($sql);
  //  echo $result;

    $row=$result-> fetch_assoc();
    
    
   // echo $row["pay_status"];
    
    if($row["parcelStatus"]==0){
         $update = mysqli_query($conn,"UPDATE parcel SET parcelStatus=1 where parcelID='$parcelID'");
         
         

        //  //Notification_collected_function_here()
        //  $message = $client->messages->create(
        //         // The number you'd like to send the message to
        //         '+6' . $row["phoneNum"], //custom number
        //         [
        //             // A Twilio phone number you purchased at https://console.twilio.com
        //             'from' => '+12027914477',
        //             // The body of the text message you'd like to send
        //             'body' => "." //custom
        //         ]
        //     );
      
        //     if($message){
        //         echo 'message sent';
        //     }else{
        //         echo 'something happend';
        //     }

            //call send sms function
            // include_once "../config/twillioconfig.php";
            // if(sendSMS($row["phoneNum"]) == true)
            //     echo "message sent";
            // else    
            //     echo "something happened";
    }
    else if($row["parcelStatus"]==1){
         $update = mysqli_query($conn,"UPDATE parcel SET parcelStatus=2 where parcelID='$parcelID'");
    }
    else if($row["parcelStatus"]==2){
         $update = mysqli_query($conn,"UPDATE parcel SET parcelStatus=0 where parcelID='$parcelID'");
    }
        
 
    // if($update){
    //     echo"success";
    // }
    // else{
    //     echo"error";
    // }
    
?>