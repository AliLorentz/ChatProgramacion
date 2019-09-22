<?php
    session_start();
    require 'database.php';
    //Si no esta vacio manejar sus datos de el method POST
    if(!empty($_POST['name'])&& !empty($_POST['password'])){
        //Consulta
        $records = $conn->prepare('SELECT id, name, password FROM users WHERE name = :name');
        $records->bindParam(':name', $_POST['name']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
        $message='';
        //Obtiene el id      y Compara la contraseña que esta colocando el usuario a la de la base de datos
        if(count($results) > 0 && password_verify($_POST['password'], $results['password'])){
            $_SESSION['users_id']=$results['id'];
            header("Location: php-login.php");
        }else{
            $message = 'Credenciales no existentes';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Social</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/index.css">
</head>
<body>
</br>
</br>
</br>
</br>
</br>
</br>
</br>

	<div class="formulario row container col-12">
		<div class="registrar col-4">
			<h1 >Bienvenido</h1>
			<p class="text-center ">Ingresa a la Mejor Red Social de la Universidad Experimental Nacional del Tachira</p>
			<p class="text-center "><b>Registrate si aun no tienes cuenta</b></p>
			<a href="register.php" class="boton-registro">Registrarse</a>
		</div>
		<form action="index.php" method="POST" class="col-5">
		<div class="form-group">
			<h1 class="titulo text-center">Iniciar Usuario</h1>
			<label for="exampleInputEmail1">User</label>
			<input type="text" name="name" class="form-control" id="userInput" placeholder="Enter user">
		<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
		</div>
		<button type="submit" class="btn btn-success col-12">Login</button>
		</form>	
	</div>
</body>
</html>