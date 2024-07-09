<?php
/* SEBASTIAN GAETE */

class Producto {
  private $id;
  private $nombre;
  private $descripcion;
  private $precio;
  private $categoria_id;
  private $conn;

  public function __construct($conn) {
    $this->conn = $conn;
  }

  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
      return $this->id;
  }

  public function setNombre($nombre) {
      $this->nombre = $nombre;
  }

  public function getNombre() {
      return $this->nombre;
  }

  public function setDescripcion($descripcion) {
      $this->descripcion = $descripcion;
  }

  public function getDescripcion() {
      return $this->descripcion;
  }

  public function setPrecio($precio) {
      $this->precio = $precio;
  }

  public function getPrecio() {
      return $this->precio;
  }

  public function setCategoriaId($categoria_id) {
      $this->categoria_id = $categoria_id;
  }

  public function getCategoriaId() {
      return $this->categoria_id;
  }

  
  public function insert() {
      $sql = "INSERT INTO productos (nombre, descripcion, precio, categoria_id) VALUES (:nombre, :descripcion, :precio, :categoria_id)";
      $stmt = $this->conn->prepare($sql);
      $stmt->bindParam(':nombre', $this->nombre);
      $stmt->bindParam(':descripcion', $this->descripcion);
      $stmt->bindParam(':precio', $this->precio);
      $stmt->bindParam(':categoria_id', $this->categoria_id);
      return $stmt->execute();
  }

  public function getAll() {
    $sql = "SELECT * FROM productos";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
}