<?php
include '../class/autoload.php';
$database = new Database("miproyecto", "127.0.0.1", "root", "warcrychile123");
$datos = new Producto($database->getConnection());
$productos = $datos->getAll();
header('Location: views/lista_productos.php');
exit();
?>