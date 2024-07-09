<?php
include '../class/autoload.php';
$database = new Database("miproyecto", "127.0.0.1", "root", "warcrychile123");
$datos = new Categoria($database->getConnection());
$categorias = $datos->getAll();
header('Location: views/lista_categorias.php');
exit();
?>