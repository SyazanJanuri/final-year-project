
<div class="container p-5">

<h4>Collection</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * FROM parcel WHERE parcelID='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
  
?>
<form id="update-Items" onsubmit="updateCollection()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="parcelID" value="<?=$row1['parcelID']?>" hidden>
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="parcelStatus" value="<?=$row1['parcelStatus']?>" hidden>
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="phoneNum" value="<?=$row1['phoneNum']?>" hidden>
    </div>
    <div class="form-group">
      <label for="name">Recipient Name:</label>
      <input type="text" class="form-control" id="recipientName" value="<?=$row1['recipientName']?>">
    </div>
    <div class="form-group">
      <label for="desc">Collection Date:</label>
      <input type="text" class="form-control" id="collectionDate" value="<?php date_default_timezone_set("Asia/Kuala_Lumpur"); echo date("Y-m-d") ." ". date("H:i:s"); ?>" disabled>
    </div>
    
    
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update Collection</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

    </div>