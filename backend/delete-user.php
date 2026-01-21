<?php
try {
  include '../config/config.php';

  $uid = $_REQUEST['uid'];

  $sql = $conn->prepare("DELETE FROM user WHERE uid = :userid");
  $sql->execute([
    ':userid' => $uid,
    ]) or throw new Exception("Query Failed" . $this->errorInfo());
  
  header("Location: http://localhost/my_projects/NEWS_site/admin/users.php");
} catch(Exception $err) {
  $message = $err->getMessage();
  echo "<h1>$message</h1>";
}

?>