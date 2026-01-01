<?php
// $host = "localhost";
// $user = "root";
// $password = "";
// $db = "my-news-site";

// $conn = mysqli_connect($host, $user, $password, $db) or die("⚠️Connection failed". mysqli_connect_error());

$db = "mysql:host=localhost;dbname=my-news-site";
$user = "root";
$pass = "";

$options = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

$conn = new PDO($db, $user, $pass, $options) or throw new Exception("Connection failed" . $conn->errorInfo());

?>