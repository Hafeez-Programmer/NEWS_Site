<?php
try {
  include '../config/config.php';

  $fname = $_REQUEST['fname'];
  $lname = $_REQUEST['lname'];
  $uname = $_REQUEST['user'];
  $role = $_REQUEST['role'];
  $uid = $_REQUEST['userid'];

  $sql = $conn->prepare("UPDATE user SET firstname = :firstname, lastname = :lastname, username = :username, role = :role WHERE uid = :userid");
  $sql->execute([
    ':firstname' => $fname,
    ':lastname' => $lname,
    ':username' => $uname,
    ':role' => $role,
    ':userid' => $uid,
    ]) or throw new Exception("Query Failed" . $this->errorInfo());
  
  header("Location: http://localhost/my_projects/NEWS_site/admin/users.php");
} catch(Exception $err) {
  $message = $err->getMessage();
  echo "<h1>$message</h1>";
}

?>