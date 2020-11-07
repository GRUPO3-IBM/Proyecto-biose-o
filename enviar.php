<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset =utf-8>
		<meta name="author" content="Massiel Colla">
		<link rel="icon" href="IMG/ISOTIPO.ico">
    	<link rel="stylesheet" href="ESTILOS/estiloBasic.css">
   	 	<link rel="stylesheet" href="ESTILOS/estilosmenu.css">
    	<link rel="stylesheet" href="socialmedia.css">
    	<link rel="stylesheet" href="ESTILOS/estiloNosotros.css">
    	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    	<script src="jquery-3.4.1.min.js" type="text/javascript"></script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    	<link rel="stylesheet" href="enviar.php">
		<title>Mensaje enviado</title>
	</head>
	<body>
		<?php
		$destino ="slideart.company@gmail.com";
		$nombre = $_POST["nombre"];
		$correo = $_POST["correo"];
		$telefono = $_POST["telefono"];
		$mensaje = $_POST["mensaje"];
        $contenido ="Nombre: " .$nombre. "\nCorreo: ".$correo. "\nTeléfono: ".$telefono. "\nMensaje: ".$mensaje;
        mail($destino, "Ha recibido un nuevo mensaje" , $contenido);
		header("Location:https://ibm2020.github.io/Slideart/nosotros.html");
		?>
		<h2>Su mensaje ha sido enviado correctamente</h2>
	</body>    
</html>