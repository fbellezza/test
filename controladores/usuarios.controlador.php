<?php

class ControladorUsuarios{

	/*=============================================
	INGRESO DE USUARIO
	=============================================*/

	static public function ctrIngresoUsuario(){

		if(isset($_POST["ingUsuario"])){

			if(preg_match('/^[a-zA-Z0-9@.-_]+$/', $_POST["ingUsuario"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){

			   	$encriptar = crypt($_POST["ingPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				$tabla = "usuario";

				$item = "mail";
				$valor = $_POST["ingUsuario"];

				$respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

				if($respuesta["mail"] == $_POST["ingUsuario"] && $respuesta["password"] == $encriptar){

						$_SESSION["iniciarSesion"] = "ok";						
						$_SESSION["id"] = $respuesta["id"];
						$_SESSION["nombre"] = $respuesta["nombre"];
						$_SESSION["mail"] = $respuesta["mail"];

					echo '

					<script>
						
						window.location = "inicio";			

					</script>';			

				}else{

					echo '

					<script>
						
						alert("Upps!! No te Logeaste. Intenta de nuevo");
						window.location = "inicio";			

					</script>';

				}

			}	

		}

	}

	/*=============================================
	REGISTRO DE USUARIO
	=============================================*/

	static public function ctrCrearUsuario(){

		if(isset($_POST["nuevoUsuario"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) &&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoApellido"]) &&
			   preg_match('/^[a-zA-Z0-9@.-_]+$/', $_POST["nuevoUsuario"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoPassword"])){

			   $tabla = "usuario";

				$encriptar = crypt($_POST["nuevoPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				$datos = array("nombre" => $_POST["nuevoNombre"],
								"apellido" => $_POST["nuevoApellido"],
					           "mail" => $_POST["nuevoUsuario"],
					           "password" => $encriptar,
					           );

				$respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);
			
				if($respuesta == "ok"){

					echo '

					<script>
						
						alert("Usuario Registrado con exito");
						window.location = "inicio";			

					</script>';


				}	


			}else{

				echo '<script>
						alert("No se Pudo Registrar el usuario");
						window.location = "register";	
					
				</script>';

			}


		}


	}

	/*=============================================
	REGISTRO DE NUEVA PASSWORD
	=============================================*/

	static public function ctrCambiarPass(){

		if(isset($_POST["editarPassword"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarPassword"]) ){

			   $tabla = "usuario";

				$encriptar = crypt($_POST["editarPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				$datos = array("id" => $_SESSION["id"],
					           "password" => $encriptar,
					           );

				$respuesta = ModeloUsuarios::mdlNuevoPass($tabla, $datos);
			
				if($respuesta == "ok"){

					echo '

					<script>
						
						alert("Usuario Modificado con exito, vuelva a iniciar sesion");
						window.location = "logout";			

					</script>';


				}	


			}else{

				echo '<script>
						alert("No se Pudo modificar el usuario");
						window.location = "register";	
					
				</script>';

			}


		}


	}
}
	?>