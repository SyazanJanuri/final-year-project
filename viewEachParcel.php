<div class="container">
<h2>Parcel Details</h2>

<table class="table table-striped">
    <thead>
        <tr>
            <th>S.N</th>
            <th>Tracking Number</th>
            <th>Phone Number</th>
            <th>Receive Date</th>
            <th>Recipient Name</th>
            <th>Status</th>
        </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $ID= $_GET['parcelID'];
      $count = 1;
      $sql="SELECT * FROM parcel WHERE parcelID = $ID";
      $result=$conn-> query($sql);
      
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
       <tr>
          <td><?=$count?></td>
          <td><?=$row["trackNum"]?></td>
          <td><?=$row["phoneNum"]?></td>
          <td><?=$row["receiveDate"]?></td>
          <td><?=$row["recipientName"]?></td>
          <?php 
                if($row["parcelStatus"]==0){//tukar
                            
            ?>
                <td><button class="btn btn-danger">Pending </button></td>
            <?php
                }else if($row["parcelStatus"]==1){//tukar
                            
              ?>
                  <td><button class="btn btn-success">Collected </button></td>
              <?php
                        
                }else{
            ?>
                <td><button class="btn btn-secondary">Disposed</button></td>
        <?php
                }
             ?> 
        </tr>
    <?php
                $count=$count+1;
        } ?><button class="btn btn-primary" style="height:40px" onclick="sendParcelNotification('2')">Send Reminder!</button> 
            <?php }else{
            echo "N/A";
        }
    ?>
</table>
</div>
