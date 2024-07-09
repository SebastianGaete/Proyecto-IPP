<?php
include_once '../../class/database.php';
include_once '../../class/categoria.php';
$database = new Database("miproyecto", "127.0.0.1", "root", "warcrychile123");
$datos = new Categoria($database->getConnection());
$categorias = $datos->getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/estilos.css">
    <title>Lista de Categorías</title>
</head>

<body>
    <header>
    <nav class="navbar">
        <div>
            <a href="../../index.php"> <img class="logo" src="/assets/img/logo.png" alt="ícono tienda"> </a>
        </div>
        <div>
            <ul class="navbar_list">
                <li>
                    <a href="../../index.php">Inicio</a>
                </li>
                <li>
                    <a href="/backend/views/form_categorias.html">Alta de categorias</a>
                </li>
                <li>
                    <a href="/backend/views/form_productos.html">Alta de productos</a>
                </li>
                <li>
                    <a href="/backend/views/lista_categorias.php">Lista Categorías</a>
                </li>
                <li>
                    <a href="/backend/views/lista_productos.php">Lista Productos</a>
                </li>
            </ul>
        </div>
    </nav>
    </header>


    <main>
    <table>
        <tr>
            <th>Id</th>
            <th>Nombre Categoria</th>
        </tr>
        <?php foreach ($categorias as $categoria): ?>
            <tr>
                <td>
                    <div>
                        <?= $categoria["id"] ?>
                    </div>
                </td>
                <td>
                    <div>
                        <?= $categoria["nombre"] ?>
                    </div>  
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <div class="nombre_alumno">
        <p>Sebastián Gaete Fuentes</p>
    </div>
    
    </main>
</body>
</html>