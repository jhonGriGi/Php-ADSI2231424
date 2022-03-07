<?php
class Conexion
{
    private $host, $user, $pass, $database;

    public function __construct()
    {
        $this->host = "localhost:3306";
        $this->user = "root";
        $this->pass = "06031103";
        $this->database = "universidad_php";
    }

    public function connect()
    {
        $conexion = mysqli_connect($this->host, $this->user, $this->pass, $this->database) or die("Problemas con la conexion");

        return $conexion;
    }
}
