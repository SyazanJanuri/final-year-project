<?php
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';

// Your Account SID and Auth Token from console.twilio.com
$sid = "";
$token = "";
$client = new Twilio\Rest\Client($sid, $token);

// Use the Client to make requests to the Twilio REST API
$message = $client->messages->create(
    // The number you'd like to send the message to
    '+60176929827', //custom number
    [
        // A Twilio phone number you purchased at https://console.twilio.com
        'from' => '+12027914477',
        // The body of the text message you'd like to send
        'body' => "."//custom
    ]
);

if($message){
    echo 'message sent';
}else{
    echo 'something happend';
}









// ///reminder code: 
// <?php
// include_once "../config/dbconnect.php";
// include_once "../twilio-php-main/src/Twilio/autoload.php";

// // Your Twilio credentials
// $sid = "AC2521ec1c3c21ebd7b340d1caad1c1884";
// $token = "e851720c810ef007893b2f357e7be2e4";
// $client = new Twilio\Rest\Client($sid, $token);

// // Function to send notification
// function sendNotification($to, $from, $body) {
//     global $client;

//     $message = $client->messages->create(
//         $to,
//         [
//             'from' => $from,
//             'body' => $body
//         ]
//     );

//     return $message;
// }

// if (isset($_POST['parcelID'])) {
//     $parcelID = $_POST['parcelID'];

//     // Fetch parcel information from the database (adjust the query accordingly)
//     $sql = "SELECT * FROM parcel WHERE parcelID = $parcelID";
//     $result = $conn->query($sql);
//     $row = $result->fetch_assoc();
    
//     // update

//     // Use the sendNotification function with appropriate parameters
//     $message = sendNotification('+6' . $row['phoneNum'], '+12027914477', '.');

//     if ($message) {
//         echo 'Notification sent successfully';
//     } else {
//         echo 'Failed to send notification';
//     }
// }
// ?>
