<?php
try {
  include '../config/config.php';

  $sql = $conn->prepare("SELECT * FROM post");
} catch (Exception $err) {
  
}

?>