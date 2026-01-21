<?php
try {
  include '../config/config.php';

  $category = $_REQUEST['category'];

  $sql = $conn->prepare("INSERT INTO category (categoryname) VALUES (:category)");
  $sql->execute([":category" => $category]) or throw new Exception("Query Failed" . $this->getMessage());
  
  header("Location: http://localhost/my_projects/NEWS_site/admin/category.php");
} catch (Exception $err) {
  $message = $err->getMessage();
  echo "<h1>$message</h1>";
}
?>