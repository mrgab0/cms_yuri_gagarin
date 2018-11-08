<?php 

require 'init.php';
	

	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$usuario=$_POST['usuario'];
	$password=sha1($_POST['password']);

	$sql="INSERT INTO admins (nombre,apellido,usuario,password,email)
			values ('$nombre','$apellido','$usuario','$password', '$email')";
	echo mysqli_query($conexion,$sql); 
 ?>