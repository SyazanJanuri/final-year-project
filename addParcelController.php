<?php

    include_once "../config/dbconnect.php";
    include_once "../twilio-php-main/src/Twilio/autoload.php";
    // Your Account SID and Auth Token from console.twilio.com
    $sid = "AC2521ec1c3c21ebd7b340d1caad1c1884";
    $token = "e851720c810ef007893b2f357e7be2e4";
    $client = new Twilio\Rest\Client($sid, $token);
    
    if(isset($_POST['upload']))
    {
        
        $trackNum = $_POST['trackNum'];
        $phoneNum = $_POST['phoneNum'];
        $date = $_POST['date'];
        $parcelStatus = 0;
        $parcelNumber = generateParcelNumber($date, $conn);
        date_default_timezone_set("Asia/Kuala_Lumpur");
        $sendDate = date("Y-m-d H:i:s");
        //disposed date generated
        

        //add parcel detail
         $insert = mysqli_query($conn,"INSERT INTO parcel
         (parcelNumber, trackNum, phoneNum, receiveDate, parcelStatus)   VALUES ('$parcelNumber', '$trackNum', '$phoneNum', '$date', $parcelStatus)"); //insert parcel number

        // Select latest parcel ID
        $sql = "SELECT MAX(parcelID) AS maxParcelID FROM parcel";
        $result = $conn->query($sql);

        // Fetch the value from the result object
        $row = $result->fetch_assoc();
        $maxParcelID = $row['maxParcelID'];

         //insert notification table
         mysqli_query($conn,"INSERT INTO notifications
         (sendDate, notificationStatus, parcelID)   VALUES ('$sendDate', 'successful', '$maxParcelID' )");
    
            // Use the Client to make requests to the Twilio REST API
            $message = $client->messages->create(
            '+6' . $phoneNum,
            [
                'from' => '+12027914477',
                'body' => "Your parcel '". $trackNum ."' has arrive at Cellarium Centre. Parcel Number : " . $parcelNumber . ". Receive Date: " . $date 
            ]
            );

        if($message){
            echo 'message sent';
        }else{
            echo 'something happend';
        }
  
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../staffDashboard.php?size=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../staffDashboard.php?size=success");
         }
     
    }
       
    // function to generate parcel number
    


    function generateParcelNumber($date, $conn) {
        // Format the date to match the database date format (adjust as needed)
        $formattedDate = date('Y-m-d', strtotime($date));
    
        // Query to get the count of parcels for the given date
        $query = "SELECT COUNT(*) AS parcelCount FROM parcel WHERE receiveDate = '$formattedDate'";
        $result = mysqli_query($conn, $query);
    
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $parcelCount = $row['parcelCount'];
    
            // Increment the count and append it to the date
            $newParcelCount = $parcelCount + 1;
            return $newParcelCount;
        } else {
            // Handle query error
            echo mysqli_error($conn);
            return null;
        }
    }
    
    



   
?>

