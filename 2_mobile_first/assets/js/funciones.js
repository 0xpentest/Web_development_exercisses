
/*Funciones utilizadas en nuestro documento index.html*/

function textoImagen(n){
	switch (n) {
		case 1:
			document.getElementById("texto-img1").innerHTML = "<button id='b1' class='btn btn-dark' onclick='ocultar_t(1)'>Ver menos..</button> <br> 			    <p>Esta es una descripción más detallada del producto1</p>";
			break;
		case 2:
			document.getElementById("texto-img2").innerHTML = "<button id='b2' class='btn btn-dark' onclick='ocultar_t(2)'>Ver menos..</button> <br> 			    <p>Esta es una descripción más detallada del producto2</p>";
			break;
		case 3:
			window.document.getElementById("texto-img3").innerHTML = "<button id='b3' class='btn btn-dark' onclick='ocultar_t(3)'>Ver menos..</button> <br> 		<p>Esta es una descripción más detallada del producto3</p>";
			break;
		case 4:
			window.document.getElementById("texto-img4").innerHTML = "<button id='b4' class='btn btn-dark' onclick='ocultar_t(4)'>Ver menos..</button> <br> 		<p>Esta es una descripción más detallada del producto4</p>";
			break;
		case 5:
			window.document.getElementById("texto-img5").innerHTML = "<button id='b5' class='btn btn-dark' onclick='ocultar_t(5)'>Ver menos..</button> <br> 		<p>Esta es una descripción más detallada del producto5</p>";
			break;
		case 6:
			window.document.getElementById("texto-img6").innerHTML = "<button id='b6' class='btn btn-dark' onclick='ocultar_t(6)'>Ver menos..</button> <br> 		<p>Esta es una descripción más detallada del producto6</p>";
			break;
		case 7:
			window.document.getElementById("texto-img7").innerHTML = "<button id='b7' class='btn btn-dark' onclick='ocultar_t(7)'>Ver menos..</button> <br> 		<p>Esta es una descripción más detallada del producto7</p>";
			break;
		case 8:
			window.document.getElementById("texto-img8").innerHTML = "<button id='b8' class='btn btn-dark' onclick='ocultar_t(8)'>Ver menos..</button> <br> 		<p>Esta es una descripción más detallada del producto8</p>";
			break;
	}
	
}


function ocultar_t(n){
	switch (n) {
		case 1:
			window.document.getElementById("texto-img1").innerHTML = "<button id='b1' class='btn btn-dark' onclick='textoImagen(1)'>Ver más..</button><br> <p></p>";
			break;
		case 2:
			window.document.getElementById("texto-img2").innerHTML = "<button id='b2' class='btn btn-dark' onclick='textoImagen(2)'>Ver más..</button><br> <p></p>";
			break;
		case 3:
			window.document.getElementById("texto-img3").innerHTML = "<button id='b3' class='btn btn-dark' onclick='textoImagen(3)'>Ver más..</button><br> <p></p>";
			break;
		case 4:
			window.document.getElementById("texto-img4").innerHTML = "<button id='b4' class='btn btn-dark' onclick='textoImagen(4)'>Ver más..</button><br> <p></p>";
			break;
		case 5:
			window.document.getElementById("texto-img5").innerHTML = "<button id='b5' class='btn btn-dark' onclick='textoImagen(5)'>Ver más..</button><br> <p></p>";
			break;
		case 6:
			window.document.getElementById("texto-img6").innerHTML = "<button id='b6' class='btn btn-dark' onclick='textoImagen(6)'>Ver más..</button><br> <p></p>";
			break;
		case 7:
			window.document.getElementById("texto-img7").innerHTML = "<button id='b7' class='btn btn-dark' onclick='textoImagen(7)'>Ver más..</button><br> <p></p>";
			break;
		case 8:
			window.document.getElementById("texto-img8").innerHTML = "<button id='b8' class='btn btn-dark' onclick='textoImagen(8)'>Ver más..</button><br> <p></p>";
			break;
	}
}



/*** FUNCIONES PARA MOSTRAR LA HORA ACTUAL ***/
var intval = "";

		//FUNCIONES
		function start_Int(){
			if(intval == ""){
				intval = window.setInterval("start_clock()", 1000); //cada segundo llame a esta función
			}else {
				stop_Int();
			}
		}

        //Iniciar el reloj
        function start_clock(){
        	var d = new Date();
        	var sw = "am";
			var h = d.getHours(); //Obtenemos la hora
			var m = d.getMinutes(); //Obtenemos los minutos
			var s = d.getSeconds() + " " ; //Obteneos los segundos
			if (h > 12){
				h -= 12;
				sw = "pm";
			}

			if (m < 10 ){
				m ="0" + m;
			}

			if (s < 10){
				s = "0" + s;
			}

			myTimer.innerHTML= h + ":" + m + ":" + s + "" + sw;

		}


		function stop_clock() {
			if(intVal != ""){
				window.clearInterval(intval);
				intval = "";
				myTimer.innerHTML = "Interval Stopped";
			}
		}


/*VENTANA MODAL PARA MOSTRAR QUE EL FORMULARIO HA SIDO ENVIADO*/
/*
function modalEnviado(){

	
					<div class='modal" tabindex="-1" role="dialog" id="modalMensaje">
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
}
*/
/*FIN VENTANA MODAL*/
