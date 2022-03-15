<?php
require('../../vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable('../../');
$dotenv->load();

class Conexion {
  private $localhost;
  private $username;
  private $pass;
  private $database;

  public function __construct()
  {
    $this->localhost = 'localhost';
    $this->username = 'root';
    $this->pass = $_ENV['DDBB_PASSWORD'];
    $this->database = 'banco_BIDG';
  }

  public function connect()
  {
    return mysqli_connect($this->localhost, $this->username, $this->pass, $this->database);
  }
}

?>
