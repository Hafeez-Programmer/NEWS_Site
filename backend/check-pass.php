<?php
include '../config/config.php';
$id = 11;
$sql = $conn->prepare("SELECT * FROM user WHERE uid=?");
$sql->execute([$id]) or die("Query Failed");
$result = $sql->fetch();
echo "<pre>";
print_r($result);
echo "</pre>";

$db_pass = $result['password'];
// echo $db_pass;

$pass = 123;

if (password_verify($pass, $db_pass)) {
  echo '✅matched';
} else {
  echo '⚠️not matched';
}

// $password = 123;
// echo $password;
// echo "<br>";

// $hashed_pass = password_hash($password, PASSWORD_BCRYPT);
// echo $hashed_pass;
// echo "<br>";

// if (password_verify($password, $hashed_pass)) {
//   echo "matched";
// } else {
//   echo "not matched";
// }


?>