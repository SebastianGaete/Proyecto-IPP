<?php
include '../class/autoload.php';
$database = new Database("miproyecto", "127.0.0.1", "root", "warcrychile123");

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$categoria_id=$_POST['id'];

$producto = new Producto($database->getConnection());

$producto->setNombre($nombre);
$producto->setDescripcion($descripcion);
$producto->setPrecio($precio);
$producto->setCategoriaId($categoria_id);

$producto->insert();

header('Location: lista_productos_load.php');
exit;

?>