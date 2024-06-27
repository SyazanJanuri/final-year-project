
<div class="container p-5">

<h4>Edit User</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * FROM user WHERE userID ='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
  
?>
<form id="update-Items" onsubmit="updateUser()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="userID" value="<?=$row1['userID']?>" hidden>
    </div>
    <div class="form-group">
    <label for="name">Username:</label>
      <input type="text" class="form-control" id="username" value="<?=$row1['username']?>">
    </div>
    <div class="form-group">
      <label for="name">Password:</label>
      <input type="text" class="form-control" id="password" value="<?=$row1['password']?>">
    </div>
    <div class="form-group">
        <label>Role:</label>
        <select id="roleID" >
        <?php
            $sql="SELECT u.*, r.* FROM user u JOIN role r ON u.roleID = r.roleID";
            $result = $conn-> query($sql);

            if ($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
                echo"<option selected value='".$row['roleID']."'>".$row['position'] ."</option>";
            }
            }
        ?>
        </select>
    </div>
    <div class="form-group">
      <label for="name">Email:</label>
      <input type="text" class="form-control" id="userEmail" value="<?=$row1['userEmail']?>">
    </div>
    <div class="form-group">
      <label for="name">Phone Number:</label>
      <input type="text" class="form-control" id="userPhoneNum" value="<?=$row1['userPhoneNum']?>">
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