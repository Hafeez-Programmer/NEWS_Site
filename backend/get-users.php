<?php
try {
  // include 'database.php';
  include '../config/config.php';

  $sql = $conn->prepare("SELECT * FROM user INNER JOIN role ON user.role = role.rid");
  $sql->execute() or throw new Exception("Query failed: " . $sql->errorInfo());
  $result = $sql->fetchAll();
  // $db = new Database();
  // $result = $db->select('*', 'user');
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

// $sql = "SELECT * FROM user 
// INNER JOIN role ON user.role = role.rid";

// if ($result = mysqli_query($conn, $sql)) {
//   $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
//   echo json_encode($output);
// } else {
//   $output = ["status" => false, "message" => "no record found"];
//   echo json_encode($output);
// }
?>