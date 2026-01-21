<?php
try {
  include '../config/config.php';

  $cid = $_REQUEST['cat_id'];
  $cname = $_REQUEST['cat_name'];

  $sql = $conn->prepare("UPDATE category SET categoryname = (:cname) WHERE cid = :cid");
  $sql->execute([
    ':cname' => $cname,
    ':cid' => $cid,
  ]) or throw new Exception("Query Failed" . $this->getMessage());
  
  header("Location: http://localhost/my_projects/NEWS_site/admin/category.php");
} catch (Exception $err) {
  $message = $err->getMessage();
  echo "<h1>$message</h1>";
  die();
}
?>