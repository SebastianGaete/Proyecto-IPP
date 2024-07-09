<?php
/* SEBASTIAN GAETE */

class Database{
  private $connection;

  function __construct($base_datos, $host, $user, $pass) {
    $conection = "mysql:dbname=".$base_datos.";host=$host";
    $this->connection = new PDO($conection, $user, $pass);
    if (!$this->connection) throw new Exception("No se pudo realizar la conexión a la base de datos: ".$base_datos);
  }
  
  public function getConnection(){
    return $this->connection;
  }
}
?>