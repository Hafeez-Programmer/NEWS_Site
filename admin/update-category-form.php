<?php
include "header.php";
include "../backend/get-category.php";

if ($status == false) {
  echo "<h1>$message</h1>";
  die();
} else {
  ?>
  <div id="admin-content">
    <div class="container">
      <div class="row">
        <div class="col-md-7 m-auto">
          <h1 class="adin-heading"> Update Category</h1>
        </div>
        <div class="col-md-7 m-auto">
          <form action="../backend/update-category.php" method="POST">
            <div class="form-group">
              <input type="hidden" name="cat_id" class="form-control" value="<?php echo $result['cid'] ?>" placeholder="">
            </div>
            <div class="form-group">
              <label>Category Name</label>
              <input type="text" name="cat_name" class="form-control" value="<?php echo $result['categoryname'] ?>" placeholder="" required>
            </div>
            <br>
            <input type="submit" name="sumbit" class="btn btn-primary" value="Update" required />
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php
  include "footer.php";
}
?>