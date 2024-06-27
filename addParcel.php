
<div class="container p-5">

<h4>New Parcel</h4>

<form  enctype='multipart/form-data' action="./controller/addParcelController.php" method="POST">
            <div class="form-group">
              <label for="size">Tracking Number:</label>
              <input type="text" class="form-control" name="trackNum" required>
            </div>
            <div class="form-group">
              <label for="size">Contact:</label>
              <input type="text" class="form-control" name="phoneNum" required>
            </div>
            <div class="form-group">
              <label for="size">Receive Date:</label>
              <input type="date" class="form-control" name="date" value="<?php date_default_timezone_set("Asia/Kuala_Lumpur"); echo date("Y-m-d"); ?>" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add parcel</button>
            </div>
 
  </form>

    </div>