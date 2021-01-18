<!--conectar con la base de datos clientes en el servidor de BD MySQL-->
    <?php include('../bd/conexion.php'); 

	/*Recogemos los valores recibidos del formulario ÁREA PRIVADA*/
		if(isset($_POST["usuario"]) && isset($_POST["password"])){ 
        	$usuario = $_POST["usuario"];
        	$password = $_POST["password"];

			//echo $usuario, $password;

			/*Preparamos la consulta a la tabla usuarios de la BD clientes*/
    		$sql = "SELECT usuario, clave FROM usuarios WHERE usuario='$usuario' AND clave='$password'";

    		//Realizamos la consulta
    		$resultado = mysqli_query($conn, $sql);

    		//cerramos la conexión
    		mysqli_close($conn);

            //Si ha encontrado algún resultado (tiene algún registro)
    		if($resultado){
    			//echo "consulta correcta";
    			while($obtener_filas=mysqli_fetch_array($resultado)){

    					/*echo $obtener_filas['usuario'];
    					echo $obtener_filas['clave'];*/
                       $nom = $obtener_filas['usuario'];
                       $cla = $obtener_filas['clave'];   	
    			}

                if($nom == "pepe" && $cla == "123456"){
                    header("Location:../../area_privada.php?nombre=$nom&dato=1");
                }else{
                    //echo "No tienes acceso";
                    header('Location:../../index.php');
                }


    		}
        }
    
	?>