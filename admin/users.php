<?php 
include "header.php"; 
include "../backend/get-users.php";

if ($status == false) {
  echo "<h1>$message</h1>";
  die();
} else {
?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Users</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="add-user-form.php">add user</a>
              </div>
              <div class="col-md-12">
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Full Name</th>
                          <th>User Name</th>
                          <th>Role</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                        <?php
                        foreach ($result as $key => $value) {
                        ?>
                          <tr>
                              <td class='id'><?php echo $value['uid'] ?></td>
                              <td><?php echo $value['firstname'] . " " . $value['lastname'] ?></td>
                              <td><?php echo $value['username'] ?></td>
                              <td><?php echo $value['role'] ?></td>
                              <td class='edit'><a href='update-user-form.php?uid=<?php echo $value['uid'] ?></a>'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='../backend/delete-user.php?uid=<?php echo $value['uid'] ?></a>'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <?php
                          }     
                          ?>
                      </tbody>
                  </table>
                  <ul class='pagination admin-pagination'>
                      <li class="active"><a>1</a></li>
                      <li><a>2</a></li>
                      <li><a>3</a></li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
<?php 
include "footer.php"; 
}
?>

