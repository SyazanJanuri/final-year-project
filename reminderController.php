<?php
include_once "../config/dbconnect.php";
include_once "../twilio-php-main/src/Twilio/autoload.php";

// Your Twilio credentials
$sid = "AC2521ec1c3c21ebd7b340d1caad1c1884";
$token = "e851720c810ef007893b2f357e7be2e4";
$client = new Twilio\Rest\Client($sid, $token);

// Function to send notification
function sendNotification($to, $from, $body) {
    global $client;

    $message = $client->messages->create(
        $to,
        [
            'from' => $from,
            'body' => $body
        ]
    );

    return $message;
}

if (isset($_POST['parcelID'])) {

 
    // Fetch parcels that exceed 3 months
    $sql = "SELECT parcelID, trackNum, phoneNum, receiveDate, CURDATE(), TIMESTAMPDIFF(MONTH, receiveDate, CURDATE()) AS MonthDate FROM parcel 
    WHERE TIMESTAMPDIFF(MONTH, receiveDate, CURDATE()) > 3 && reminderStatus = 0 AND parcelStatus = 0;";
    $result = $conn->query($sql);
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $sendDate = date("Y-m-d H:i:s");

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Get the receive date
            $receiveDate = $row['receiveDate'];
            
            // Add 6 months to the receive date
            $dueDate = date('Y-m-d', strtotime($receiveDate . ' +6 months'));

            // Update reminder status or perform other actions if needed
            $update = mysqli_query($conn, "UPDATE parcel SET reminderStatus=1 WHERE parcelID='" . $row['parcelID'] . "'");

            // Use the sendNotification function with appropriate parameters
            $message = sendNotification('+6' . $row['phoneNum'], '+12027914477', 'Please collect your parcel Before: '. $dueDate);

            if ($message) {
                echo 'Notification sent successfully for parcel ' . $row['parcelID'] . '<br>';
            } else {
                echo 'Failed to send notification for parcel ' . $row['parcelID'] . '<br>';
            }

             //insert notification table
         mysqli_query($conn,"INSERT INTO notifications 
         (sendDate, notificationStatus, parcelID)   VALUES ('$sendDate', 'successful', '" . $row['parcelID'] . "' )");
        }
    } else {
        echo 'No parcels exceed 3 months';
    }
}
?>
