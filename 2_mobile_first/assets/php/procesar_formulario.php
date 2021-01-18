<?php ob_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Procesar Formulario</title>
	<!--FAVICON-->
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../images/favicon.ico" type="image/x-icon">

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
	<link rel="stylesheet" type="text/css" href="../css/estilos_mobil_first.css">
	<!--Estilos para la versión imprimible-->
	<link rel="stylesheet" type="text/css" media="print" href="../css/print.css">

	<!--Estilos para el formulario-->
	<link rel="stylesheet" href="../css/formulario_files/formoid1/formoid-solid-orange.css" type="text/css" />
	<script type="text/javascript" src="../css/formulario_files/formoid1/jquery.min.js"></script>
</head>
<body>
	<?php
	  $nombre = $_POST["nombre"];
	  $sexo = $_POST["sexo"];
	  $ciudad = $_POST["ciudad"];
	  $email = $_POST["email"];
	  $consulta = $_POST["consulta"];

      /*
	  echo $nombre . " " . $sexo . " " . $ciudad . " " . $email . " " . $consulta;
	  */

      /*
	  header("Location: ../../index.html")*/

	?>

	<!--CONTACTO-->
    <div id="caja-contacto">
    	<h1 id="contacto">Datos recibidos</h1>

    	<form class="formoid-solid-orange" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post">
    		<div class="title">
    			<h2 id="titulo-texto-form">Datos</h2>
    		</div>
    		
    		<!--NOMBRE-->
    		<div class="element-input" title="Indique su nombre">
    			<label class="title"><span class="required"></span></label>
    			<div class="item-cont">
    				<input class="large" type="text" name="nombre" value="<?php echo $nombre; ?>" readonly  /><span class="icon-place"></span>
    			</div>   
    		</div>

    		<!--SEXO-->
    		
    		<div class="element-radio" title="Indique su sexo">
    		<?php	
    		if($sexo == "mujer") 
    		{
    		?>		 	
	    			<label class="title">Sexo<span class="required"></span></label>
	    			<div class="column column2"><label>
	    				<input type="radio" name="sexo"  checked="" readonly /><span>Mujer</span></label>
	    			</div>
	    			<span class="clearfix"></span>

	    	<?php
	    	} else if ($sexo == "hombre"){
	    	?>	
	    			<div class="column column2"><label>
	    				<input type="radio" name="sexo" checked="" readonly /><span>Hombre</span></label>
	    			</div>
	    			<span class="clearfix"></span>
	    	<?php
	    	}
	    	?>
	    	</div>

    		<!--CIUDAD-->
    		<div class="element-select" title="Indique su ciudad">
    			<label class="title"><span class="required"></span></label>
    			<div class="item-cont">
    				<div class="large"><span>
    					<select name="ciudad" required="required" readonly>
    						<?php 
    						if ($ciudad == "Madrid"){
    						?>
				    			<option><?php echo $ciudad; ?></option>
				    		<?php
				    		}
				    		else if($ciudad == "Barcelona"){
				    		?>
				    			<option><?php echo $ciudad; ?></option>
				    		<?php
				    		}
				    		else if($ciudad == "San Sebastián"){
				    		?>
				    			<option><?php echo $ciudad; ?></option> 
				    		<?php
				    	    }
                            ?>
    					</select>
    					<i></i><span class="icon-place"></span></span>
    				</div>
    			</div>
    		</div>

    		<!--EMAIL-->
    		<div class="element-email" title="Indique su email">
    			<label class="title"><span class="required"></span></label>
    			<div class="item-cont">
    				<input class="large" type="email" name="email" value="<?php echo $email; ?>" readonly /><span class="icon-place"></span>
    			</div>
    		</div>

    		<!--CONSULTA-->
    		<div class="element-textarea" title="Indique su consulta"><label class="title">
    			<span class="required"></span></label>
    			<div class="item-cont">
    				<textarea class="medium" name="consulta" cols="20" rows="5" readonly><?php echo $consulta; ?> </textarea><span class="icon-place"></span>
    			</div>
    		</div>

    		<!--BOTÓN ENVIAR-->
    		<!--
    		<div class="submit">
    			<input type="submit" onclick="window.location.href='index.html';">Click Here</button> 
    		</div>
    		-->
            
    		<!--<meta http-equiv="refresh" content="30">-->
    		
            <div class="alert alert-success" role="alert" style="text-align: center">
    			<strong>Su email ha sido recibido</strong>
			</div>

    		<?php
    			header("refresh:5;url=../../index.html" );
    			ob_flush();
    		?>
    	</form>
    	<!--FIN DEL FORMULARIO-->

	
</body>
</html>