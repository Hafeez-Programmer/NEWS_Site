<?php
try {
  include '../config/config.php';

  $cid = $_REQUEST['cid'];

  $sql = $conn->prepare("DELETE FROM category WHERE cid = :cat_id");
  $sql->execute([':cat_id' => $cid]) or throw new Exception("Query Failed" . $this->getMessage());

  header("Location: http://localhost/my_projects/NEWS_site/admin/category.php");

} catch (Exception $err) {
  $message = $err->getMessage();
  echo "<h1>$message</h1>";
  
  die();
}
?>