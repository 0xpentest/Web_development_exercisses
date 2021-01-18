
/*Este script pone la fecha y hora de creación en una etiqueta HTML de párrafo <p>
* cuyo nombre de id es mostrar-creacion */

//Creamos el objeto fecha de la clase Date
var fecha = new Date();

			//Para la fecha
			var dia = fecha.getDay()-1;
			if(dia < 10){
				dia = "0" + dia;
			}
			var mes = fecha.getMonth()+1;
			if(mes < 10){
				mes = "0" + mes;
			}
			var anio = fecha.getFullYear();


			//Para la hora
			var hora = fecha.getHours();
			if(hora < 10){
				hora = "0" + hora;
			}
			var minutos = fecha.getMinutes();
			if(minutos < 10){
				minutos = "0" + minutos;
			}
			var segundos = fecha.getSeconds();
			if(segundos < 10){
				segundos = "0" + segundos;
			}

			window.document.getElementById("mostrar-creacion").innerHTML = "Fecha de creación: " + dia + "-" + mes + "-" + anio + " hora: " + hora + ":" + minutos + ":" + segundos;