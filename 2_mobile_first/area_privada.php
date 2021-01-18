<?php 
    /*Este if es para comprobar si debemos mostrar el nombre del usuario o no mostrarlo
    * es decir sólo se muestra si llega a esta página desde procesar_login.php y
    * si llega desde las páginas 1_crear_producto o 2_consultar_producto no muestra el nombre*/
    if (isset($_GET['dato']) && $_GET['dato'] == 1){
		$nombre = $_GET['nombre'];
		$d = $_GET['dato'];
	}else {
		$d = 0;
	} 


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Área Privada</title>
	<!--FAVICON-->
	<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!--CDNs DE bootstrap 4-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!--fin bootstrap 4-->

	<!-- cookiealert styles -->
	<!--
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">-->

	<!--LINK PARA USAR LOS ICONOS DE FONTAWESOME-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<!--ESTILOS PROPIOS-->
	<link rel="stylesheet" type="text/css" href="assets/css/estilos_mobil_first.css">
	<!--Estilos para la versión imprimible-->
	<link rel="stylesheet" type="text/css" media="print" href="assets/css/print.css">

	<!--Estilos para el formulario-->
	<link rel="stylesheet" href="assets/css/formulario_files/formoid1/formoid-solid-orange.css" type="text/css" />
	<script type="text/javascript" src="assets/css/formulario_files/formoid1/jquery.min.js"></script>
</head>
<body>
	<!--Menu NAV de bootstrap 4-->
	<nav class="navbar navbar-light ">
		<!--Esto es para el logotipo-->
		<a class="navbar-brand" href="#">
			<img src="assets/images/logo_transparente.png" width="30" height="30" alt="logotipo">
		</a>
		<!--fin del logotipo-->
		<a class="navbar-brand tipo" href="#" >Perfumería Chanel</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="assets/php/crud_productos/1_crear_producto.php">Añadir Producto <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="assets/php/crud_productos/2_consultar_producto.php">Consultar Producto</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Modificar Producto</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="assets/php/crud_productos/3_borrar_producto.php">Borrar Producto</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php">Salir</a>
				</li>
			</ul>

		</div>
	</nav>
	<!-- fin del menu NAV de bootstrap 4 -->

	

	<h1 class="encabezado_area">Área Privada</h1>
	<div align="center">
		<h2>Bienvenido 
			<?php 
			    if ($d == 1){
					echo $nombre; 
			    }
			?>
		</h2>
	</div>

	<div id="container">

		

	</div>


</body>
</html>