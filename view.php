<h1 style="color: green">Example</h1>

<div id="ordersBtn" >
    <h2>Parcel Details</h2>
  
   <!-- search function-->
      <div class="form-group">
  
      <label for="statusFilter">Filter by Status:</label>
      <select id="statusFilter" onchange="filterByStatus()">
          <option value="">All</option>
          <option value="pending">Pending</option>
          <option value="collected">Collected</option>
      </select>
  
      </div>
  
  
    <!-- Trigger the modal with a button -->
   
    <table class="table table-striped">
      <thead>
        <tr>
          <th>P.N.</th>
          <th>Tracking Number</th>
          <th>Contact</th>
          <th>Receive Date</th>
          <th>Status</th>
          <th>Collection</th>
  
       </tr>
      </thead>
       <?php
        include_once "../config/dbconnect.php";
        $sql="SELECT * from parcel ORDER BY receiveDate DESC";
        $result=$conn-> query($sql);
        
        if ($result-> num_rows > 0){
          while ($row=$result-> fetch_assoc()) {
      ?>
         <tr>
            <td><?=$row["parcelNumber"]?></td>
            <td><?=$row["trackNum"]?></td>
            <td><?=$row["phoneNum"]?></td>
            <td><?=$row["receiveDate"]?></td>
             <?php 
                  if($row["parcelStatus"]==0){//tukar
                              
              ?>
                  <td>Pending</td>
              <?php
                          
                  }else{
              ?>
                  <td>Collected</td>
          <?php
                  }
               ?> 
            <td><button class="btn btn-primary" style="height:40px" onclick="updateCollectionForm('<?=$row['parcelID']?>')">Details</button></td>
        
          </tr>
      <?php
              
          }
        }
      ?>
       
    </table>
     
  </div>