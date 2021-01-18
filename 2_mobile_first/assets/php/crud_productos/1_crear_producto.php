<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crear Producto</title>
	<!--FAVICON-->
	<link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../../images/favicon.ico" type="image/x-icon">

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
	<link rel="stylesheet" type="text/css" href="../../css/estilos_mobil_first.css">
	<!--Estilos para la versión imprimible-->
	<link rel="stylesheet" type="text/css" media="print" href="../../css/print.css">

	<!--Estilos para el formulario-->
	<link rel="stylesheet" href="../../css/formulario_files/formoid1/formoid-solid-orange.css" type="text/css" />
	<script type="text/javascript" src="../../css/formulario_files/formoid1/jquery.min.js"></script>
</head>
<body>
	<!--Menu NAV de bootstrap 4-->
	<nav class="navbar navbar-light ">
		<!--Esto es para el logotipo-->
		<a class="navbar-brand" href="#">
			<img src="../../images/logo_transparente.png" width="30" height="30" alt="logotipo">
		</a>
		<!--fin del logotipo-->
		<a class="navbar-brand tipo" href="#" >Perfumería Chanel</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Añadir Producto <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="2_consultar_producto.php">Consultar Producto</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#trabajos">Modificar Producto</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#localizacion">Borrar Producto</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../../../area_privada.php?dato=0">Salir</a>
				</li>
			</ul>

		</div>
	</nav>
	<!-- fin del menu NAV de bootstrap 4 -->

	

	<h1 class="encabezado_area">Crear Producto</h1>
	<!--
	<div align="center">
		<h2><?php //echo $nombre; ?></h2>
	</div>-->

	<div id="container">

		<form class="formoid-solid-orange" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post" action="#">

			<div class="title">
    			<h2 id="titulo-texto-form">Nuevo producto</h2>
    		</div>
    		
    		<!--NOMBRE-->
    		<div class="element-input" title="Indique su nombre">
    			<label class="title"><span class="required">*</span></label>
    			<div class="item-cont">
    				<input class="large" type="text" name="nombre" required="required" placeholder="Nombre"/><span class="icon-place"></span>
    			</div>
    		</div>

    		<!--PRECIO-->
    		<div class="element-input" title="Indique el precio">
    			<label class="title">Precio<span class="required">*</span></label>
    			<div class="item-cont">
    				<input class="large" type="text" name="precio" required="required" placeholder="Precio"/><span class="icon-place"></span>
    			</div>	
    		</div>

    		<!--PROVEEDOR-->
    		<div class="element-select" title="Indique el proveedor">
    			<label class="title"><span class="required">*</span></label>
    			<div class="item-cont">
    				<div class="large"><span>
    					<select name="prov" required="required">
				    		<option value="Seleccionar">Seleccionar</option>
				    		<option value="1">Paco Rabanne</option>
				    		<option value="2">Carolina Herrera</option>
				    		<option value="3">Chanel</option>
    					</select>
    					<i></i><span class="icon-place"></span></span>
    				</div>
    			</div>
    		</div>

    		<!--BOTÓN ENVIAR-->
    		<div class="submit">
    			<input type="submit" value="Enviar" name="enviado"/>
    		</div>
		</form>

		<!--PROCESAR FORMULARIO-->
		<!--conectar con la base de datos clientes en el servidor de BD MySQL-->
		<?php include('../../bd/conexion.php'); 

		/*Recogemos los valores recibidos del formulario ÁREA PRIVADA*/
		if(isset($_POST["nombre"]) && isset($_POST["precio"]) && isset($_POST["prov"])){ 
			$nom = $_POST["nombre"];
			$pre = $_POST["precio"];
			$pro = $_POST["prov"];

            //Crea la preconsulta
			$sql = "INSERT INTO productos VALUES (null, '$nom', '$pre', '$pro')";

            //Realizamos la consulta
			$resultado = mysqli_query($conn, $sql);

    		//cerramos la conexión
			mysqli_close($conn);

			if($resultado){
				//echo "Datos insertados correctamente";
				?>
				<!--MENSAJE DE ALERTA DE DATOS INSERTADOS CORRECTAMENTE-->
				<br>
				<div align="center">
					<div class="alert alert-success alert-dismissible col-md-4 col-md-offset-4">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>Correcto!</strong> Producto insertado.
					</div>
				</div>
				
			<?php
			}else{
				//echo "Error al insertar los datos";
				?>
				<!--MENSAJE DE ALERTA DE ERROR AL INSERTAR DATOS-->
				<br>
				<div align="center">
					<div class="alert alert-success alert-dismissible col-md-4 col-md-offset-4">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>Error!</strong> No se ha insertado el producto.
					</div>
				</div>
			<?php
			}
		}



		?>

	</div>


</body>
</html>