
<div class="container p-5">

<h4>Edit Parcel</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * FROM parcel WHERE parcelID='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
  
?>
<form id="update-Items" onsubmit="updateParcel()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="parcelID" value="<?=$row1['parcelID']?>" hidden>
    </div>
    <div class="form-group">
    <label for="name">parcel Number:</label>
      <input type="text" class="form-control" id="parcelNumber" value="<?=$row1['parcelNumber']?>" disabled>
    </div>
    <div class="form-group">
      <label for="name">Tracking Number:</label>
      <input type="text" class="form-control" id="trackNum" value="<?=$row1['trackNum']?>">
    </div>
    <div class="form-group">
      <label for="name">Phone Number:</label>
      <input type="text" class="form-control" id="phoneNum" value="<?=$row1['phoneNum']?>">
    </div>
    <div class="form-group">
      <label for="name">Receive Date:</label>
      <input type="date" class="form-control" id="receiveDate" value="<?=$row1['receiveDate']?>" disabled>
    </div>
   
    
    
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

    </div>