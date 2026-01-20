<?php 
include "header.php"; 

include "../backend/get-user.php";

if ($status == false) {
  echo "<h1> . $message . </h1>";
  die();
} else {
  $roleid = $result['rid'];
?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12 m-auto">
                  <h1 class="admin-heading">Modify User Details</h1>
              </div>
              <div class="col-md-6 m-auto">
                  <!-- Form Start -->
                  <form  action="../backend/update-user.php" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="userid"  class="form-control" value="<?php echo $result['uid'] ?>" placeholder="" >
                      </div>
                          <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="fname" class="form-control" value="<?php echo $result['firstname'] ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="lname" class="form-control" value="<?php echo $result['lastname'] ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="user" class="form-control" value="<?php echo $result['username'] ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role">
                            <?php
                            include '../backend/get-roles.php';
                            foreach ($result as $key => $value) {
                              $selected = ($roleid == $value['rid']) ? 'selected' : '';
                            ?>
                              <option 
                              value="<?php echo $value['rid'] ?>"
                              <?php echo $selected ?>
                              >
                              <?php echo $value['role'] ?>
                              </option>
                            <?php
                            } 
                            ?>
                          </select>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>
                  <!-- /Form -->
              </div>
          </div>
      </div>
  </div>
<?php 
include "footer.php"; 
}
?>
