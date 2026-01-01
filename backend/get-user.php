<?php
try {
  include '../config/config.php';

  $user_id = $_GET['userid'];
  echo $user_id;
  die();

  $sql = $conn->prepare("SELECT * FROM user INNER JOIN role ON user.role = role.rid WHERE uid = $user_id");
  $sql->execute() or throw new Exception("Query Failed" .  $sql->errorInfo());
  $result = $sql->fetch();

  $output = json_encode($result);
  echo $output;
} catch(Exception $err) {
  $result = [
    "status" => false,
    "message" => $err->getMessage(),
  ];

  $output = json_encode($result);
  echo $output;
}


?>