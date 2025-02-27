<div >
  <h2>Roles</h2>

  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#addModal">
    Add Role
  </button>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Position</th>
        <th class="text-center">Description</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from role;";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["position"]?></td>
      <td><?=$row["roleDescription"]?></td>
      <td><button class="btn btn-primary" style="height:40px" onclick="updateRoleForm('<?=$row['roleID']?>')">Edit</button></td>
          <td><button class="btn btn-danger" style="height:40px"  onclick="RoleDelete('<?=$row['roleID']?>')">Delete</button></td>
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
          <h4 class="modal-title">New Role</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/addRoleController.php" method="POST">
            <div class="form-group">
              <label for="size">Position:</label>
              <input type="text" class="form-control" name="position" required>
            </div>
            <div class="form-group">
              <label for="size">Description:</label><br>
              <textarea rows="7" cols="45" name="roleDescription" ></textarea>
              <!-- <input type="text" class="form-control" name="password" required> -->
            </div>
           
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add Role</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>