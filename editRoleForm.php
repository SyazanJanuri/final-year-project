
<div class="container p-5">

<h4>Edit Role</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * FROM role WHERE roleID ='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
  
?>
<form id="update-Items" onsubmit="updateRole()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="roleID" value="<?=$row1['roleID']?>" hidden>
    </div>
    <div class="form-group">
    <label for="name">Position:</label>
      <input type="text" class="form-control" id="position" value="<?=$row1['position']?>">
    </div>
    <div class="form-group">
      <label for="name">Description:</label>
      <input type="text" class="form-control" id="roleDescription" value="<?=$row1['roleDescription']?>">
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