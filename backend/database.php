<?php

class Database {
  private $db = "mysql:host=localhost;dbname=my-news-site";
  private $user = "root";
  private $pass = "";
  private $mysqli;
  private $conn = false;
  private $result = [];
  private $options = [
    PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ];

  public function __construct() {
    if (!$this->conn) {
      $this->mysqli = new PDO($this->db, $this->user, $this->pass, $this->options) or throw new PDOException("Connection failed" . $this->mysqli->errorInfo());
      $this->conn = true;
    }
  }

  public function select($select, $table) {
    $sql = $this->mysqli->prepare("SELECT ? FROM ? INNER JOIN role ON user.role = role.rid");
    $sql->bindParam(1, $select, PDO::PARAM_STR);
    $sql->bindParam(2, $table, PDO::PARAM_STR);
    $sql->execute() or throw new Exception("SQL error: " . $sql->errorInfo());
    $this->result = $sql->fetchAll();
    return $this->result;
  }

  public function __destruct() {
    if ($this->conn) {
      $this->mysqli = null;
      $this->conn = false;
    }
  }
}

?>