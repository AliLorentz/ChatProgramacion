<?php
    session_start();
    require 'database.php';
    include "database.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/mensajes.css">
    <title>Lista de Usuarios</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Chat <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Agregar</a>
      </li>
    </ul>
  </div>
</nav>

    <h1>Lista de Usuarios</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Acciones</th>
        </tr>

        <?php
            
        ?>

        <tr>
            <td>1</td>
            <td>Tiziana</td>
            <td>Amicarella</td>
            <td>
                <a class="link_agg" href="#">Agregar</a>
                |
                <a class="link_delete" href="#">Eliminar</a>
            </td>
        </tr>

        <tr>
            <td>1</td>
            <td>Tiziana</td>
            <td>Amicarella</td>
            <td>
                <a class="link_agg" href="#">Agregar</a>
                <a class="link_delete" href="#">Eliminar</a>
            </td>
        </tr>

        <tr>
            <td>1</td>
            <td>Tiziana</td>
            <td>Amicarella</td>
            <td>
                <a class="link_agg" href="#">Agregar</a>
                <a class="link_delete" href="#">Eliminar</a>
            </td>
        </tr>


    </table>

</body>
</html>