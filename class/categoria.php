<?php
/* SEBASTIAN GAETE */

class Categoria {
    private $id;
    private $nombre;
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

    public function insert() {
        $sql = "INSERT INTO categorias (nombre) VALUES (:nombre)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nombre', $this->nombre);
        return $stmt->execute();
    }

    public function getAll() {
        $sql = "SELECT * FROM categorias";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}