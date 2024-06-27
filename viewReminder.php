<div class="container">
<h2>Reminder</h2>

<table class="table table-striped">
    <thead>
        <tr>
            <th>S.N.</th>
            <th>Tracking Number</th>
            <th>Phone Number</th>
            <th>Months</th>
        </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";

      $count = 1;
      $sql="SELECT parcelID, trackNum, phoneNum, receiveDate, CURDATE(), TIMESTAMPDIFF(MONTH, receiveDate, CURDATE()) AS MonthDate FROM parcel 
            WHERE TIMESTAMPDIFF(MONTH, receiveDate, CURDATE()) > 2 && reminderStatus = 0 AND parcelStatus = 0;";
      $result=$conn-> query($sql);
      
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
       <tr>
          <td><?=$count?></td>
          <td><?=$row["trackNum"]?></td>
          <td><?=$row["phoneNum"]?></td>
          <td><?=$row["MonthDate"]?></td>
        </tr>
    <?php
                $count=$count+1;
        } ?><button class="btn btn-primary" style="height:40px" onclick="sendParcelNotification('2')">Send Reminder!</button> 
            <?php }else{
            echo "(There are no parcels exceed 3 months yet)";
        }
    ?>
</table>
</div>
