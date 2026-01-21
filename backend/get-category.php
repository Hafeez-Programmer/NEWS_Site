<?php
try {
  include '../config/config.php';

  $cid = $_REQUEST['cid'];

  $sql = $conn->prepare("SELECT * FROM category WHERE cid = :cid");
  $sql->execute([':cid' => $cid]) or throw new Exception("Query Failed" . $err->getMessage());
  $result = $sql->fetch();

  $status = true;

} catch (Exception $err) {
  $status = false;
  $message = $err->getMessage();
}
?>