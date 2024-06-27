<div >
  <h2>Cellarium's Staff</h2>
  <!-- Trigger the modal with a button edit delete button belum habis coding-->
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#addModal">
    Add Staff
  </button>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Username </th>
        <th class="text-center">Role</th>
        <th class="text-center">Email</th>
        <th class="text-center">Contact Number</th>
        <th class="text-center">Register Date</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT u.*, r.* FROM user u JOIN role r ON u.roleID = r.roleID where userID != 999 ORDER BY r.roleID; ";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["username"]?></td>
      <td><?=$row["position"]?></td>
      <td><?=$row["userEmail"]?></td>
      <td><?=$row["userPhoneNum"]?></td>
      <td><?=$row["registerDate"]?></td>
      <td><button class="btn btn-primary" style="height:40px" onclick="updateUserForm('<?=$row['userID']?>')">Edit</button></td>
          <td><button class="btn btn-danger" style="height:40px"  onclick="UserDelete('<?=$row['userID']?>')">Delete</button></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>

  <!--Add Modal -->
  <div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New User</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/addUserController.php" method="POST">
            <div class="form-group">
              <label for="size">Username:</label>
              <input type="text" class="form-control" name="username" required>
            </div>
            <div class="form-group">
              <label for="size">Password:</label>
              <input type="text" class="form-control" name="password" required>
            </div>
            <div class="form-group">
              <label>Role:</label>
              <select name="roleID" >
                <option disabled selected>Select Role</option>
                <?php

                  $sql="SELECT * from role";
                  $result = $conn-> query($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['roleID']."'>".$row['position'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="size">Email:</label>
              <input type="text" class="form-control" name="userEmail" required>
            </div>
            <div class="form-group">
              <label for="size">Phone Number:</label>
              <input type="text" class="form-control" name="userPhoneNum" required>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add User</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  </div>