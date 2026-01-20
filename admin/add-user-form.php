<?php 
include "header.php"; 
include "../backend/get-roles.php";

if ($status == false) {
  echo "<h1> . $message . </h1>";
  die();
} else {
?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12 m-auto">
                  <h1 class="admin-heading text-center">Add User</h1>
              </div>
              <div class="col-md-6 m-auto">
                  <!-- Form Start -->
                  <form  action="../backend/add-user.php" method ="POST" autocomplete="off">
                      <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                      </div>
                          <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                      </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="user" class="form-control" placeholder="Username" required>
                      </div>

                      <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control" placeholder="Password" required>
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" >
                            <?php
                            foreach ($result as $key => $value) {
                            ?>
                              <option 
                              value="<?php echo $value['rid'] ?>"
                              >
                              <?php echo $value['role'] ?>
                              </option>
                            <?php
                            } 
                            ?>
                          </select required>
                      </div>
                      <input type="submit"  name="save" class="btn btn-primary" value="Save" required />
                  </form>
                  <!-- Form End-->
              </div>
          </div>
      </div>
  </div>
<?php
include "footer.php"; 
}
?>
