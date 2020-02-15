<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<title>Mi Galería en PHP</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="titulo">Mi Galería en PHP y MySQL</h1>
		</div>
	</header>

	<div class="fotos">
		<div class="contenedor">
            <h1><?php echo $_SESSION["vacio"]?></h1><br>
            <form class ="formulario-error" action="../galeria/subir.php" method="post">
                <input type="submit" value="Cargar Imagen">
            </form>
		</div>
	</div>

	<footer>
		<p class="copyright">Galeria creada por Leonardo Jimenez</p>
	</footer>
</body>
</html>