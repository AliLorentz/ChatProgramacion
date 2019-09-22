<?php
//Llamo a la base de datos
require 'database.php';
$message = '';
//Si no estan vacios los campos del formulario
    if(!empty($_POST['name']) && !empty($_POST['password'])){ 
        $sql = "INSERT INTO users (name, password) VALUES (:name, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $_POST['name']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT); //Encriptar contraseña
        $stmt->bindParam(':password', $password);
        if($stmt->execute()){
            $message='Successfully created new user';
        }else{
            $message='Sorry there must have been an issue creating your account';
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
	<link rel="stylesheet" href="assets/register.css">
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

		<form action="register.php" method="POST" class=" col-5">
		<div class="form-group">
			<h1 class="titulo text-center">Registro</h1>
			<label for="exampleInputName">Nombre</label>
			<input type="text" class="form-control" name="name" id="name" placeholder="Nombre">
		</div>
		
		</br>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
			<label class="form-check-label" for="inlineRadio1">Masculino</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" >
			<label class="form-check-label" for="inlineRadio2">Femenino</label>
		</div>
	
		<div class="form-group">
		<label for="start">	</br>Nacimiento</label>

		<input type="date" id="start" name="trip-start"
			min="1970-01-01" max="2015-12-31">
		</div>
		
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" name="password" class="form-control" id="password" placeholder="Password">
		</div>
		<button type="submit" class="btn btn-success col-12">Registrarse</button>
        </form>	
        <div class="registrar col-4">
			<h1 >Bienvenido</h1>
			<p class="text-center ">Registrate y accede a la mejor forma de comunicarte con tus compañeros de clases</p>
			<p class="text-center "> <b>¿Ya tienes cuenta?</b></p>
			<a href="index.php" class="boton-registro">Iniciar Cuenta</a>
		</div>
	</div>
    
</body>
</html>