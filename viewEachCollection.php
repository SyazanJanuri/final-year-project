<div class="container">
<h2>Collection Details</h2>

<table class="table table-striped">
    <thead>
        <tr>
            <th>S.N</th>
            <th>Recipient Name</th>
            <th>Collection Date</th>
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
            $recipientName = !empty($row["recipientName"]) ? $row["recipientName"] : "Not Available";
            $collectionDate = !empty($row["collectionDate"]) ? $row["collectionDate"] : "Not Available";
    ?>
       <tr>
          <td><?=$count?></td>
          <td><?=$recipientName?></td>
          <td><?=$collectionDate?></td>
        </tr>
    <?php
                $count=$count+1;
        }
      } else {
        // Display "Not Available" if no rows are retrieved
        ?>
        <tr>
          <td colspan="3">Not Available</td>
        </tr>
        <?php
      }
    ?>
</table>
</div>
