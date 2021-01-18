<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Borrar Producto</title>
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

	<!--FUNCIÓN-->
	<script>
		function redireccionar(){
			window.location="3_borrar_producto.php";
		}
	</script>
	

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
					<a class="nav-link" href="1_crear_producto.php">Añadir Producto <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="2_consultar_producto.php">Consultar Producto</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Modificar Producto</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Borrar Producto</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../../../area_privada.php?dato=0">Salir</a>
				</li>
			</ul>

		</div>
	</nav>
	<!-- fin del menu NAV de bootstrap 4 -->

	

	<h1 class="encabezado_area">Borrar Producto</h1>
	<!--
	<div align="center">
		<h2><?php //echo $nombre; ?></h2>
	</div>-->

	<div id="container">

		<!--conectar con la base de datos clientes en el servidor de BD MySQL-->
		<?php include('../../bd/conexion.php'); ?>

		<div align="center">

			<form  class="form-inline col-md-3" method="post" action="#" >
	     		 
	    		<!--CÓDIGO-->
		    	<label for="cod">Código:</label>
		    	<!--<input type="text" class="form-control" placeholder="Código producto" id="cod" name="cod">-->

		    	<div class="element-select form-control" title="Indique el código">
	    			<label class="title"></label>
	    			<div class="item-cont">
	    				<div class="large"><span>
	    					<select name="cod">
                            <!--Realizamos una consulta a la BD para obtener todos los id-->
	    						<?php
	    							$sql = "SELECT id FROM productos";
	    							$resultado = mysqli_query($conn, $sql);
	    							while ($filas = mysqli_fetch_array($resultado)){
	    								echo '<option value="'.$filas[id].'">'.$filas[id].'</option>';
	    							} 
	    						?>
	    					</select>
	    				</div>
	    			</div>
    			</div>

	    		<!--BOTÓN-->
	    		<button type="submit" class="btn btn-primary">Borrar</button>
			
			</form>
		</div>
		
		
		<!--PROCESAR FORMULARIO-->
		<?php

		/*Si el botón enviar ha sido pulsado*/
		if(isset($_POST["cod"])){

			?>
			<script>
				var confirmar = confirm("¿Estás seguro de borrar este producto?");
				if(confirmar){ //si confirma ACEPTAR
			</script>
					<?php
						$codigo = $_POST["cod"];
						//Crea la preconsulta
						$sql = "DELETE FROM productos WHERE id='$codigo'";
						//Realizamos la consulta
						$resultado = mysqli_query($conn, $sql);
						//cerramos la conexión
						mysqli_close($conn);
						if($resultado){ //Que el borrado ha sido correcto
							?>
							<!--MENSAJE DE ALERTA DE DATOS INSERTADOS CORRECTAMENTE-->
							<script>
							document.write("<br><div align='center'><div class='alert alert-success alert-dismissible col-md-4 col-md-offset-4'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Correcto!</strong> Producto Borrado.</div></div>");

							   //window.location.href="3_borrar_producto.php"; 
							   setTimeout ("redireccionar()", 2000); 
							</script>
						<?php

						}
						?>
				<script>		
				}	
			</script>
			<?php 
		}
		?>

	</div>


</body>
</html>