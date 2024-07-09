<?php
include '../class/autoload.php';
$database = new Database("miproyecto", "127.0.0.1", "root", "warcrychile123");

$nombre = $_POST['categoria'];

$categoria = new Categoria($database->getConnection());
$categoria->setNombre($nombre);
$categoria->insert();

header('location: lista_categorias_load.php');
exit;

?>