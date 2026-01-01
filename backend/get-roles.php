<?php
try {
  include '../config/config.php';

  $sql = $conn->prepare("SELECT * FROM role");
  $sql->execute() or throw new Exception("Query Failed: " . $sql->errorInfo());
  $result = $sql->fetchAll();
  $output = json_encode($result);
  echo $output;
} catch (PDOException $err) {
  $result = [
    "status" => false,
    "message" => $err->getMessage(), 
  ];
  $output = json_encode($result);
  echo $output;
}
?>