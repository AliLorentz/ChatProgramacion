<?php
    session_start();
    require 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/mensajes.css">
    <title>Social</title>
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

<div class="row container-fluid">
    <div class="col-4">
      <div class="conversacion col-12">
          <a href="/" class="agregar">+</a>
          <span>Agregar un amigo</span>
      </div>
       <div class="persona overflow-auto">
            <?php                     
 				include("Conexion.php");
         $conec=new Conectar();
         $conec->ConectarBD();
         

         $sql="select * from users order by name";
         $resultado=$conec->getCon()->query($sql);
         while ($persona=$resultado->fetch_assoc()) {
          echo "<div class='usuarios'>".        
          "<img class='imagen' src='assets/usuario.png'/>".
          "<span class='amigos'>",$persona['name'],"</span>".
          "</br>".
          "</div>";
         }
                                                 
              ?>
           
       </div>
    </div>

    <div class="mensajes col-8">        
    </div>
</div>

</body>
</html>