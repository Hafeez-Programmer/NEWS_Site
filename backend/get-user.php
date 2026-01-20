<?php
try {
  include '../config/config.php';

  $uid = $_REQUEST['uid'];

  $sql = $conn->prepare("SELECT * FROM user INNER JOIN role ON user.role = role.rid WHERE user.uid = :uid");
  $sql->execute([
    ':uid' => $uid
  ]) or throw new Exception("Query Failed" . $this->errorInfo());
  $result = $sql->fetch();
  $status = true;

} catch(Exception $err) {
  $status = false;
  $message = $err->getMessage();
}

?>