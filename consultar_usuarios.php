<?php
    session_start();
    require 'database.php';
    //include "database.php";
   /* if(empty($_GET['id'])){
      header("location: lista_usuarios.php");
    }else{
      include("Conexion.php");
      $conec=new Conectar();
      $conec->ConectarBD();
      $idusuario=  $_GET['id'];
    }*/
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
  <a class="navbar-brand" href="#">SuperChat</a>
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

<h1 class="titulo">Consulta de Usuario</h1>
<form action="" method="POST">
  <div class="container form-group">
    <label for="nombre">Nombre de Usuario </label>
    <input type="text" name="nombre" class="form-control" id="nombre">
    <br>
    <input type="submit" value="Buscar" class="btn btn-info" name="boton">
  </div>
</form>

<?php

  if(isset($_POST['boton'])){
    include("Conexion.php");
    $conec=new Conectar();
    $conec->ConectarBD();

    $nombre = $_POST['nombre']; 
    $sql="select name from users where name = '$nombre' ";
    $resultado=$conec->getCon()->query($sql);
    
    while ($data = $resultado->fetch_assoc()){
      echo $data['name'];
    }
   
  }
?>

<table>

</table>
</body>
</html>
