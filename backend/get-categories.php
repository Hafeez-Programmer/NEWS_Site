<?php
try {
  include '../config/config.php';

  $sql = $conn->prepare("SELECT * FROM category");
  $sql->execute() or throw new Exception("Query Failed" . $this->errorInfo());
  $result = $sql->fetchAll();
  $status = true;

} catch (Exception $err) {
  $status = false;
  $message = $err->getMessage();
}
?>