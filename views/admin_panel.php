<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>panel de control del administrador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="../src/js/themes/light/main.js"></script>
</head>
<body>
    <form id="frmajax" method="POST">
		<label>Nombre</label>
		<p></p>
		<input type="text" name="nombre" id="nombre">
		<p></p>
		<label>apellido</label>
		<p></p>
		<input type="text" name="apellido" id="apellido">
		<p></p>
		<label>Usuario</label>
		<p></p>
		<input type="text" name="usuario" id="usuario">
		<p></p>
		<label>password</label>
		<p></p>
		<input type="text" name="password" id="password">
		<p></p>
		<button id="btnguardar">Guardar datos</button>
	</form>

    <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="src/js/materialize.min.js"></script>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <!-- aqui se anadio el ajax que manda los datos-->
    <script type="text/javascript">
	$(document).ready(function(){
		$('#btnguardar').click(function(){
			var datos=$('#frmajax').serialize();
			$.ajax({
				type:"POST",
				url:"../php/insertar.php",
				data:datos,
				success:function(r){
					if(r==1){
						alert("agregado con exito");
					}else{
						alert("Fallo el server");
					}
				}
			});

			return false;
		});
	});
</script>
</body>
</html>