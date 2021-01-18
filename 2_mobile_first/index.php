<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<!--ID DE SEGUIMIENTO DE GOOGLEANALYTICS-->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-MJFXSEPBDB"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-MJFXSEPBDB');
	</script>
	<meta charset="UTF-8">
	<meta name="description" content="Consigue los mejores precios en perfumes - Venta OnLine">
	<meta name="robots" content="index,follow">
	<meta name="keywords" content="perfumes, regalos, tienda online, fragancias, tienda">
	<meta name="author" content="Xabi">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tienda Perfumes Chanel Inicio</title>
	<!--FAVICON-->
	<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!--CDNs DE bootstrap 4-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!--fin bootstrap 4-->

	<!--COOKIE ALERT-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">

	<!--LINK PARA USAR LOS ICONOS DE FONTAWESOME-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<!--ESTILOS PROPIOS-->
	<link rel="stylesheet" type="text/css" href="assets/css/estilos_mobil_first.css">
	<!--Estilos para la versión imprimible-->
	<link rel="stylesheet" type="text/css" media="print" href="assets/css/print.css">

	<!--Estilos para el formulario-->
	<link rel="stylesheet" href="assets/css/formulario_files/formoid1/formoid-solid-orange.css" type="text/css" />
	<script type="text/javascript" src="assets/css/formulario_files/formoid1/jquery.min.js"></script>

	<!--funciones-->
	<script src="assets/js/funciones.js"></script>

</head>
<body onload="start_Int()">
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
					<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#servicios">Servicios</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#trabajos">Trabajos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#localizacion">Localización</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#contacto">Contacto</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="politica_privacidad.html">Política de Privacidad</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#privada">Área Privada</a>
				</li>

			</ul>
		</div>
	</nav>
	<!-- fin del menu NAV de bootstrap 4 -->

	<!-- inicio del contenido del carrousel-->
	<div class="bd-example">
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="assets/images/chanel.jpeg" class="d-block w-100" alt="Perfume chanel" title="Chanel">
					<!--quitando d-none y d-md-block se ven los subtitulos en todos los atamaños de pantalla-->
					<div class="carousel-caption">
						<h5>Perfume Chanel</h5>
						<p class="centrar">Última tendencia en perfumes.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="assets/images/escada.jpg" class="d-block w-100" alt="Perfume escada" title="Escada">
					<div class="carousel-caption ">
						<h5>Perfume Escada</h5>
						<p class="centrar">La fragancia más elegante</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="assets/images/ck.jpg" class="d-block w-100" alt="Perfume Calvin Klein" title="Calvin Clein">
					<div class="carousel-caption ">
						<h5>Perfume Calvin Clein</h5>
						<p class="centrar">Juveníl y con personalidad.</p>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<!--fin del contenido del carrousel -->

	<div class="t1">
		
        <!--<p id="mostrar-creacion" style="text-align: center;"></p>-->
        <!--PARA MOSTRAR LA HORA DE JAVASCRIPT-->
        <p id="myTimer" style="text-align: center"></p>
    	
        <!--Este scriptpone la fecha de creación en la etiqueta p con id=mostrar-creacion-->
        <!--
		<script src="assets/js/fecha.js"></script>-->
		
		<h1>Catálogo<h1>
	</div>

	<div class="three-columns">
		<p>
			Si andas en la búsqueda de perfumes de las mejores marcas has llegado a la perfumería que necesitas, Marvimundo. En Marvimundo podrás comprar el perfume para regalo que tu amigo, amiga, pareja, padre o madre necesita. En nuestro amplio catálogo de perfumes online encontrarás secciones que se adaptan a tus gustos olfativos. ¡La fragancia que necesitas está esperándote!  
		</p>

		<h2 class="centrar">Perfumes originales</h2>

		<p>
			Las fragancias más reconocidas para hombre, mujer o para los peques se encuentran en Marvimundo. Los más vendidos, los más atrevidos, los más llamativos… Todo tipo de perfume tiene cabida en nuestra oferta de perfumes online. Tenemos los mejores perfumes y colonias Eau de Toilette y Eau de Parfum para sorprender a todo el mundo allá donde vayas. Te mereces un buen perfume y Marvimundo es el lugar de referencia donde comprar perfumes online.
		</p>
	</div>
	<!--fin del div three-columns-->

	<!--GALERÍA DE IMÁGENES-->
    <!-- Photo Grid -->
    <div class="row"> 
    	<div class="column">
    		<h3>Producto 1</h3>
				<a class="grid-gallery__item" href="assets/docs/producto_1.pdf">
					<img src="assets/images/perfumes/perfume1.jpg" alt="perfume 1" style="width:100%">
				</a>

                <!--BOTÓN-->
				<div id="texto-img1" align="center" style="margin-top: 1em;">
					<button id="b1" class="btn btn-dark" onclick="textoImagen(1)">Ver más..</button>
					<p id="t1"></p>
				</div>

    		<h3>Producto 2</h3>
				<a class="grid-gallery__item" href="#">
					<img src="assets/images/perfumes/perfume2.jpg" alt="perfume 2" style="width:100%">
				</a>

				<!--BOTÓN 2-->
				<div id="texto-img2" align="center" style="margin-top: 1em;">
					<button id="b2" class="btn btn-dark" onclick="textoImagen(2)">Ver más..</button>
					<p id="t2"></p>
				</div>
    	</div>

    	<div class="column">
    		<h3>Producto 3</h3>
				<a class="grid-gallery__item" href="#">
					<img src="assets/images/perfumes/perfume3.jpg" alt="perfume 3" style="width:100%">
				</a>

				<!--BOTÓN 3-->
				<div id="texto-img3" align="center" style="margin-top: 1em;">
					<button id="b3" class="btn btn-dark" onclick="textoImagen(3)">Ver más..</button>
					<p id="t3"></p>
				</div>

    		<h3>Producto 4</h3>
				<a class="grid-gallery__item" href="#">
					<img src="assets/images/perfumes/perfume4.jpeg" alt="perfume 4" style="width:100%">
				</a>

				<!--BOTÓN 4-->
				<div id="texto-img4" align="center" style="margin-top: 1em;">
					<button id="b4" class="btn btn-dark" onclick="textoImagen(4)">Ver más..</button>
					<p id="t4"></p>
				</div>
    	</div> 

    	<div class="column">
    		<h3>Producto 5</h3>
				<a class="grid-gallery__item" href="#">
					<img src="assets/images/perfumes/perfume5.jpg" alt="perfume 5" style="width:100%">
				</a>

				<!--BOTÓN 5-->
				<div id="texto-img5" align="center" style="margin-top: 1em;">
					<button id="b5" class="btn btn-dark" onclick="textoImagen(5)">Ver más..</button>
					<p id="t5"></p>
				</div>

    		<h3>Producto 6</h3>
				<a class="grid-gallery__item" href="#">
					<img src="assets/images/perfumes/perfume6.jpg" alt="perfume 6" style="width:100%">
				</a>

				<!--BOTÓN 6-->
				<div id="texto-img6" align="center" style="margin-top: 1em;">
					<button id="b6" class="btn btn-dark" onclick="textoImagen(6)">Ver más..</button>
					<p id="t6"></p>
				</div>
    	</div>

    	<div class="column">
    		<h3>Producto 7</h3>
				<a class="grid-gallery__item" href="#">
					<img src="assets/images/perfumes/perfume7.jpg" alt="perfume 7" style="width:100%">
				</a>

				<!--BOTÓN 7-->
				<div id="texto-img7" align="center" style="margin-top: 1em;">
					<button id="b7" class="btn btn-dark" onclick="textoImagen(7)">Ver más..</button>
					<p id="t7"></p>
				</div>

    		<h3>Producto 8</h3>
				<a class="grid-gallery__item" href="#">
					<img src="assets/images/perfumes/perfume8.jpg" alt="perfume 8" style="width:100%">
				</a>

				<!--BOTÓN 8-->
				<div id="texto-img8" align="center" style="margin-top: 1em;">
					<button id="b8" class="btn btn-dark" onclick="textoImagen(8)">Ver más..</button>
					<p id="t8"></p>
				</div>
    	</div>
    </div>

    <!--LINKS CON ANCLAS-->

    <!--SERVICIOS-->
    <div id="caja-servicios">
    	<h1 id="servicios">Servicios</h1>
    	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam dignissimos accusamus nobis? Repellendus debitis, rem ratione perspiciatis, voluptate impedit mollitia, tenetur explicabo unde velit possimus quidem exercitationem optio autem delectus. Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Fuga et sequi culpa porro corrupti beatae! Sint neque deserunt hic, assumenda! At, vel nesciunt id accusamus modi corporis. Cupiditate, distinctio, facere. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident nostrum ducimus voluptates consequatur, architecto perspiciatis voluptatibus quia similique voluptatem libero. Cum repellendus in, est ipsa quibusdam velit saepe eaque ex. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus commodi facilis, rerum modi nihil totam ullam numquam quod in quasi pariatur nisi dolore! Fuga omnis numquam nesciunt aliquid minus. Nam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad nam neque aperiam maiores aut iste reiciendis, repellendus accusamus. Distinctio consequuntur molestias vel, impedit cumque minus fugiat nesciunt, sunt! Illum, nulla. Lorem ipsum, dolor, sit amet consectetur adipisicing elit. Molestias eaque non esse debitis cumque modi recusandae rem facere voluptates illo, quo nihil aliquam fuga autem temporibus veniam assumenda dolorum hic. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus repellendus tempore minima, officiis magni dignissimos tenetur, et? Magnam, blanditiis adipisci ullam vitae praesentium voluptates nam totam sunt cumque rerum numquam.</p>
    	<div class="centrar-flecha">
    		<a href="index.php">
    			<img src="assets/images/flechaArriba60.png" alt="flecha hacia arriba">
    	    </a>
    	</div>
    </div>

    <!--TRABAJOS-->
    <div id="caja-trabajos">
    	<h1 id="trabajos">Trabajos</h1>
    	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus distinctio totam ipsa excepturi adipisci sint, aspernatur nihil aperiam enim velit, placeat dignissimos. Natus eaque debitis, earum, asperiores libero ratione consequuntur? Lorem ipsum dolor sit amet consectetur adipisicing, elit. Sint velit nulla exercitationem! Nostrum, dicta. Doloremque in veritatis, quasi ut rerum odit blanditiis soluta, sit, tenetur accusantium deleniti itaque fuga quam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam dignissimos accusamus nobis? Repellendus debitis, rem ratione perspiciatis, voluptate impedit mollitia, tenetur explicabo unde velit possimus quidem exercitationem optio autem delectus. Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Fuga et sequi culpa porro corrupti beatae! Sint neque deserunt hic, assumenda! At, vel nesciunt id accusamus modi corporis. Cupiditate, distinctio, facere. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident nostrum ducimus voluptates consequatur, architecto perspiciatis voluptatibus quia similique voluptatem libero. Cum repellendus in, est ipsa quibusdam velit saepe eaque ex. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus commodi facilis, rerum modi nihil totam ullam numquam quod in quasi pariatur nisi dolore! Fuga omnis numquam nesciunt aliquid minus. Nam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad nam neque aperiam maiores aut iste reiciendis, repellendus accusamus. Distinctio consequuntur molestias vel, impedit cumque minus fugiat nesciunt, sunt! Illum, nulla. Lorem ipsum, dolor, sit amet consectetur adipisicing elit. Molestias eaque non esse debitis cumque modi recusandae rem facere voluptates illo, quo nihil aliquam fuga autem temporibus veniam assumenda dolorum hic. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus repellendus tempore minima, officiis magni dignissimos tenetur, et? Magnam, blanditiis adipisci ullam vitae praesentium voluptates nam totam sunt cumque rerum numquam.</p>
    	<div class="centrar-flecha">
    		<a href="index.php">
    			<img src="assets/images/flechaArriba60.png" alt="flecha hacia arriba" title="Ir al inicio">
    	    </a>
    	</div>
    </div>

    <!--LOCALIZACIÓN-->
    <div id="caja-localizacion">
    	<h1 id="localizacion">Mapa</h1>

        <div class="caja-mapa">
    		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2903.83306083499!2d-2.0073041849881625!3d43.29681757913523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51a5594f4affbd%3A0x9c79ece28f130a92!2sInkor%20S.L.!5e0!3m2!1ses!2ses!4v1607621159423!5m2!1ses!2ses" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    	</div>

    	<address>Parque Empresarial Zuatzu Polo de Innovación Audiovisual (PIA), Calle Juan Fermin Gilisagasti, 2, Oficina 114, 20018 Donostia-San Sebastian, Gipuzkoa</address>
    	
    	<div class="centrar-flecha">
    		<a href="index.php">
    			<img src="assets/images/flechaArriba60.png" alt="flecha hacia arriba" title="Ir al inicio">
    	    </a>
    	</div>
    </div>

    <!--CONTACTO-->
    <div id="caja-contacto">
    	<h1 id="contacto">Contactar</h1>
        <!--
    	<form class="formoid-solid-orange" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post" action="assets/php/procesar_formulario.php">-->

    	<form class="formoid-solid-orange" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post" action="#">

    		<div class="title">
    			<h2 id="titulo-texto-form">Envíe su consulta</h2>
    		</div>
    		
    		<!--NOMBRE-->
    		<div class="element-input" title="Indique su nombre">
    			<label class="title"><span class="required">*</span></label>
    			<div class="item-cont">
    				<input class="large" type="text" name="nombre" required="required" placeholder="Nombre"/><span class="icon-place"></span>
    			</div>
    		</div>

    		<!--SEXO-->
    		<div class="element-radio" title="Indique su sexo">
    			<label class="title">Sexo<span class="required">*</span></label>
    			<div class="column column2"><label>
    				<input type="radio" name="sexo" value="mujer" required="required"/><span>Mujer</span></label>
    			</div>
    			<span class="clearfix"></span>
    			<div class="column column2"><label>
    				<input type="radio" name="sexo" value="hombre" required="required"/><span>Hombre</span></label>
    			</div>
    			<span class="clearfix"></span>
    		</div>

    		<!--CIUDAD-->
    		<div class="element-select" title="Indique su ciudad">
    			<label class="title"><span class="required">*</span></label>
    			<div class="item-cont">
    				<div class="large"><span>
    					<select name="ciudad" required="required">
				    		<option value="Seleccionar">Seleccionar</option>
				    		<option value="Madrid">Madrid</option>
				    		<option value="Barcelona">Barcelona</option>
				    		<option value="San Sebastián">San Sebastián</option>
    					</select>
    					<i></i><span class="icon-place"></span></span>
    				</div>
    			</div>
    		</div>

    		<!--EMAIL-->
    		<div class="element-email" title="Indique su email">
    			<label class="title"><span class="required">*</span></label>
    			<div class="item-cont">
    				<input class="large" type="email" name="email" value="" required="required" placeholder="Email"/><span class="icon-place"></span>
    			</div>
    		</div>

    		<!--CONSULTA-->
    		<div class="element-textarea" title="Indique su consulta"><label class="title">
    			<span class="required">*</span></label>
    			<div class="item-cont">
    				<textarea class="medium" name="consulta" cols="20" rows="5" required="required" placeholder="Su consulta"></textarea><span class="icon-place"></span>
    			</div>
    		</div>

    		<!--BOTÓN ENVIAR-->
    		<div class="submit">
    			<input type="submit" value="Enviar" name="enviado"/>
    		</div>
    	</form>

    	

    	<?php
    		//Sólo entra aquí si se ha pulsado el botón enviar
    	    if(isset($_POST["enviado"])){ 
    	    	//Para comprobar que los name vienen con datos
    	    	if (isset($_POST["nombre"]) && isset($_POST["sexo"]) && isset($_POST["ciudad"]) && isset($_POST["email"]) && isset($_POST["consulta"])) {

	    	    	$nombre = $_POST["nombre"]; 
	    	    	$sexo = $_POST["sexo"];
	    	    	$ciudad = $_POST["ciudad"];
	    	    	$email = $_POST["email"];
	    	    	$consulta = $_POST["consulta"];
	    	    	?>

                    <br>
	    	    	<div align="center">
	    	    		<button class="btn btn-warning btn-sm bgcolor" data-toggle="modal" data-target="#modalMensaje">Ver modal enviado</button>
	    	    	</div>

    	    		
                    
                    <!--
    	    		<div class="alert alert-success alert-dismissible" role="alert" style="text-align: center">
    	    			<button type="button" class="close" data-dismiss="alert">×</button>
    					<strong>Su email ha sido recibido</strong>
					</div>
					-->

                    <!--VENTANA MODAL PARA MOSTRAR QUE EL FORMULARIO HA SIDO ENVIADO-->
					<div class="modal" tabindex="-1" role="dialog" id="modalMensaje">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title badge badge-success">MENSAJE</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p id="mensaje"></p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-danger" data-dismiss="modal">SALIR</button>
								</div>
							</div>
						</div>
					</div>
					<!--FIN VENTNA MODAL-->
				<?php
    	    	}
    		}
	    	
    	?>
    	<!--FIN DEL FORMULARIO-->
        <!--
    	<p class="frmd"><a href="http://formoid.com/v29.php">bootstrap form</a> Formoid.com 2.9</p><script type="text/javascript" src="formulario_files/formoid1/formoid-solid-orange.js"></script>
    	-->

        <br>
    	<div class="centrar-flecha">
    		<a href="index.php">
    			<img src="assets/images/flechaArriba60.png" alt="flecha hacia arriba" title="Ir al inicio">
    	    </a>
    	</div>
    </div>

    <!--ÁREA PRIVADA-->
    <div id="caja-privada">
    	<h1 id="privada">Área Privada</h1>

    	<form class="formoid-solid-orange" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post" action="assets/php/procesar_login.php">

    		<div class="title">
    			<h2>Acceder</h2>
    		</div>
			<div class="element-input" title="Indica tu usuario"><label class="title"><span class="required">*</span></label>
				<div class="item-cont">
					<input class="large" type="text" name="usuario" required="required" placeholder="usuario" maxlength="20" minlength="3" /><span class="icon-place"></span>
				</div>
			</div>

			<div class="element-password" title="Indica tu password"><label class="title"><span class="required">*</span></label>
				<div class="item-cont">
					<input class="large" type="password" name="password" value="" required="required" placeholder="Password" maxlength="15" minlength="6" /><span class="icon-place"></span>
				</div>
			</div>

			<div class="submit">
				<input type="submit" value="Login" name="login" />
			</div>
		</form>

        <!--
		<p class="frmd"><a href="http://formoid.com/v29.php">jquery form</a> Formoid.com 2.9</p><script type="text/javascript" src="formulario_login_files/formoid1/formoid-solid-orange.js"></script>-->
		<!-- Stop Formoid form-->

		<br>
    	<div class="centrar-flecha">
    		<a href="index.php">
    			<img src="assets/images/flechaArriba60.png" alt="flecha hacia arriba" title="Ir al inicio">
    	    </a>
    	</div>

        <!--       
        		

                       
        					<div class="alert alert-success alert-dismissible" role="alert" style="text-align: center">
    	    				<button type="button" class="close" data-dismiss="alert">×</button>
    						<strong>El usuario o password no es correcto</strong>
							</div>
		-->				

        
    </div>

    <!--Ventana Modal -->
	<div class="modal" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header cabecera-modal">
					<h4 class="modal-title">Política y Configuración de Cookies</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body ventana-modal">
					Este servicio utiliza Cookies y tecnologías similares para mejorar y optimizar la experiencia del usuario y la comercialización de los espacios publicitarios.

					A continuación encontrarás información detallada sobre quiénes son los responsables, cómo qué son las “Cookies”, qué tipología utiliza este sitio web, cómo puedes desactivarlas en tu navegador y cómo bloquear específicamente la instalación de Cookies de terceros.

					¿Quiénes son los responsables del uso de Cookies y de los datos obtenidos?

					Existen diferentes tipos de responsables en el uso de Cookies y otras tecnologías similares en este servicio (en adelante, los Responsables):

					Editor del servicio: es la empresa del grupo Vocento identificada como responsable en el Aviso Legal del servicio (en adelante, el Editor).
					Comercializador principal de los espacios publicitarios de los servicios del Grupo Vocento: Vocento Gestión de Medios y Servicios, S.L.U (antiguamente denominada Comeresa Prensa, S.L.U.), con domicilio en C/ Josefa Valcárcel, nº 40 bis, 28027 Madrid (España) (en adelante, Vocento Gestión).

					Socios del Editor: para la mejora y optimización de la experiencia de usuario y la comercialización de los espacios publicitarios se necesitan servicios, herramientas y plataformas tecnológicas de los socios del Editor (en adelante, los Socios).

					Sin embargo, debido a la complejidad del proceso de selección y asignación de estos Socios, no resulta posible identificar a los Socios que están colaborando en cada acceso al servicio. Por ello nos hemos acogido al Marco de Transparencia y Consentimiento, creado bajo la coordinación de la asociación comercial IAB Europe (IAB TCF), donde todos los Socios participantes se inscriben en una lista, exponen las finalidades para las que utilizan los datos y sus políticas de privacidad y, en su caso, obtienen el consentimiento necesario para dichas finalidades.

					Podrás consultar la lista de Socios a través de la opción “Ver nuestros socios”.

					Además, hay otros Socios similares que no se encuentran inscritos en IAB TCF, pero que el grupo Vocento ha incluido manualmente en su listado de socios. Podrás diferenciarlos porque los Socios inscritos en IAB TCF están etiquetados de esa forma en la lista de Socios.

					Anunciantes y sus socios: Para valorar la inversión en un espacio publicitario antes de su adquisición y medir el rendimiento de dicha inversión a posteriori, los Anunciantes también utilizan servicios, herramientas y plataformas tecnológicas de sus propios socios que, generalmente, también se encuentran inscritos en la lista de Socios IAB TCF.

					No es posible poner un listado de Anunciantes a tu disposición, pero en este caso resulta sencillo identificar a los Anunciantes que pueden estar utilizando Cookies o tecnologías similares en cada acceso al servicio a través de los anuncios que se muestran.

					Mediante el botón “Configurar”, podrás decidir libremente sobre cada una de las finalidades y sobre cada uno de los Socios que deseas aceptar o rechazar. Tus decisiones se registran en el TCF IAB y se ponen a disposición de todos los Socios, que tienen obligación de respetarlas.

					Antes de aceptar el uso de Cookies, ten en cuenta que algunos de los Socios y Anunciantes pueden no estar ubicados en la Unión Europea, ni en otros países con una normativa de protección de datos equivalente a la europea, cuestión de la que en su caso deben informar convenientemente en su correspondiente Política de Privacidad.

					¿Cómo afecta el uso de Cookies a la protección de tus datos personales?

					La mayoría de las Cookies y tecnologías similares recopilan información vinculada a un código que no permite obtener tu nombre, tus apellidos, tus datos de contacto, ni ningún otro dato directamente identificativo o de contacto.

					Ese código actúa como pseudónimo para poder reconocerte en cada visita al servicio y mantener toda tu información asociada al mismo, y está protegido por la normativa vigente de protección de datos (en adelante, el Pseudónimo).

					Los Responsables indicados en el apartado anterior tratarán los datos asociados a tu Pseudónimo para las finalidades que aceptes de las indicadas en el botón “Configurar” durante los plazos necesarios para cumplir con dichas finalidades.

					Además, en caso de que des tu consentimiento, algunas de esas finalidades requerirán que el Editor y/o Vocento Gestión comuniquen tu Pseudónimo y parte o toda la información asociada al resto de los Responsables.

					Podrás retirar tu consentimiento en cualquier momento accediendo a la Política de Cookies, pinchando en el botón “Configurar”.

					Aunque la normativa de protección de datos protege los datos pseudonimizados, como tu Pseudónimo no permite obtener tu identidad, no resulta posible la aplicación de los derechos de acceso, rectificación, supresión, oposición, limitación o portabilidad reconocidos en dicha normativa, salvo que seas capaz de aportar información adicional que permita vincular tu identidad con los códigos pseudónimos de tus Cookies. De otro modo, no podremos saber cuál de entre los miles de pseudónimos que manejamos se corresponde contigo.

					En caso de considerar vulnerado tu derecho a la protección de datos por parte del Editor y/o de Vocento Gestión, podrás presentar una reclamación ante la Agencia Española de Protección de Datos (www.aepd.es) o ante el Delegado de Protección de Datos de Vocento (dpo@vocento.com).

					¿Qué son las Cookies y cómo se utilizan en los servicios del Editor?

					Las Cookies son archivos que el sitio web o la aplicación que utilizas instala en tu navegador o en tu dispositivo (Smartphone, tableta o televisión conectada) durante el uso del servicio, y permiten almacenar información sobre tu visita y asignarte el Pseudónimo.

					Los servicios del Editor utilizan Cookies para:

					Asegurar que los servicios pueden funcionar correctamente.
					Almacenar tus preferencias, como el idioma que has seleccionado o el tamaño de letra.
					Conocer tu experiencia de navegación.
					Recopilar información estadística, como qué páginas has visto o cuánto tiempo has estado en nuestros medios.
					Optimizar la comercialización de los espacios publicitarios.
					Optimizar tu navegación, adaptando la información y los servicios ofrecidos a tus intereses, para proporcionarte una mejor experiencia siempre que nos visites.

					Ten en cuenta en cualquier caso que, si modificas y/o bloqueas la instalación de las Cookies, la calidad del funcionamiento de los Servicios o su disponibilidad pueden verse afectadas.

					¿Por qué son importantes?

					Desde un punto de vista técnico, permiten que los servicios online funcionen de forma más ágil y adaptada a las preferencias de los usuarios, como por ejemplo almacenar el idioma, la moneda del país o detectar el dispositivo de acceso.
					Establecen niveles de protección y seguridad que impiden o dificultan ciberataques contra el sitio web o sus usuarios.
					Permiten que los gestores de los medios puedan conocer datos estadísticos recopilados en las Cookies para mejorar la calidad y experiencia de sus servicios.
					Sirven para optimizar la publicidad que mostramos a los usuarios, ofreciendo la que más se ajusta a sus intereses.

					¿Cuáles son los diferentes tipos de Cookies que utiliza el Editor?

					Por su duración

					Las de sesión expiran cuando el Usuario abandona la página o cierra el navegador, es decir, están activas mientras dura la visita al servicio y por tanto caducan al abandonarlo o a las pocas horas de acceder.
					Las persistentes expiran cuando se cumple el objetivo para el que sirven o bien cuando se borran manualmente, tienen fecha de borrado, y se utilizan normalmente en proceso de compra online, personalizaciones o en el registro, para no tener que introducir nuestra contraseña constantemente.

					Por su titularidad

					Las Cookies propias son aquellas Cookies que son propiedad del Editor y/o de Vocento Gestión.
					Las Cookies de terceros son las Cookies que son propiedad de los demás Responsables.

					Por su finalidad: Consulta las finalidades previstas a través del botón “Configurar”.

					¿Cómo puedes administrar tus Cookies?

					Para aceptar o rechazar las finalidades, o para retirar el consentimiento prestado, pincha en el botón “Configurar”.

					Si lo que quieres es eliminar o bloquear la descarga de cookies, a continuación te indicamos los links de los principales navegadores y dispositivos para que dispongas de toda la información para consultar cómo gestionar las cookies en tu navegador.

					Para más información sobre el Navegador Opera™ haz click aquí.
					Para más información sobre el Navegador Google Chrome™ haz click aquí.
					Para más información sobre el Navegador Google Chrome™ en Android haz click aquí.
					Para más información sobre el Navegador Internet Explorer™ haz click aquí.
					Para más información sobre el Navegador Mozilla Firefox™ haz click aquí.
					Para más información sobre el Navegador Safari™ en macOS haz click aquí.
					Para más información sobre el Navegador Safari™ en IOS, haz click aquí.

					Si deseas información adicional sobre cómo configurar las Cookies detallada por proveedor o administrar tus preferencias, visita el portal Your Online Choices.

					¿Actualizamos nuestra Política de Cookies?

					Es posible que actualicemos la Política de Cookies, por ello te recomendamos revisar esta política de vez en cuando.

					La Política de Cookies se actualizó por última vez a fecha 29/07/2020.
				</div>

				<!-- Modal footer -->
				<div class="modal-footer pie-modal">
					<button type="button" class="btn " data-dismiss="modal">Cerrar</button>
				</div>

			</div>
		</div>
	</div>

	<!--COOKIE ALERT-->
	<!-- START Bootstrap-Cookie-Alert -->
	<div class="alert text-center cookiealert" role="alert" id="cookies">
		  Usamos cookies &#x1F36A; para asegurar una mejor experiencia de usuario en nuestra Web. <a href="politica_privacidad.html" target="_blank">Política de Privacidad</a>

        <!--
		<button type="button" class="btn btn-primary btn-sm acceptcookies">
			ACEPTAR
		</button>-->

		<button type="button" class="btn btn-warning btn-sm bgcolor" data-toggle="modal" data-target="#myModal">CONFIGURAR</button>   

		<!--<button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close" onclick="location.href='cookies_aceptadas.html'">ACEPTAR
		</button>-->

		<button type="button" class="btn btn-warning btn-sm bgcolor acceptcookies" aria-label="Close" onclick="MostrarVisitas()">ACEPTAR
		</button>

		<!--
		<button type="button" class="btn btn-primary btn-sm acceptcookies" data-toggle="modal" data-target="#myModal">CANCELAR</button>-->

	</div>
	<!-- END Bootstrap-Cookie-Alert -->

    <!--JS NECESARIO PARA EL COOKIE ALERT-->
	<script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
	<!--FIN DEL MENSAJE NECESARIO DEL COOKIE ALERT-->


	<footer class="page-footer font-small cyan darken-3 footer">

			<!-- Footer Elements -->
            <!--
			<div class="container centrar-footer">
	
				<div class="row">
		
					<div class="col-md-12 py-5">
						<div class="mb-5 flex-center">

							
							<a class="fb-ic">
								<i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
							</a>
							
							<a class="tw-ic">
								<i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
							</a>
							
							<a class="gplus-ic">
								<i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
							</a>
							
							<a class="li-ic">
								<i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
							</a>
							
							<a class="ins-ic">
								<i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
							</a>
							
							<a class="pin-ic">
								<i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
							</a>
						</div>
					</div>	
				</div>
			</div>
			-->

			<!-- Footer Elements -->

			<!-- Copyright -->
			<div class="footer-copyright text-center py-3 centrar-footer">© 2020 Copyright:
				<a href="#" id="enlace-footer"> perfumeria.com</a>
			</div>
			<!-- Copyright -->

		</footer>
		<!-- Footer -->

		
</body>
</html>