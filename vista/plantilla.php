<?php
  session_start();
    //Comprobamos si esta definida la sesión 'tiempo'.
    if(isset($_SESSION['tiempo']) ) {

        //Tiempo en segundos para dar vida a la sesión.
        $inactivo = 600;//10min en este caso.

        //Calculamos tiempo de vida inactivo.
        $vida_session = time() - $_SESSION['tiempo'];

            //Compraración para redirigir página, si la vida de sesión sea mayor a el tiempo insertado en inactivo.
            if($vida_session > $inactivo)
            {
                
                //Removemos sesión.
                session_unset();
                //Destruimos sesión.
                session_destroy();              
                //Redirigimos pagina.
                header("Location: inicio");

                exit();
            }

    }
    $_SESSION['tiempo'] = time();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- bootstrap CSS -->
<link rel="stylesheet" href="vista/css/bootstrap.css">
<!-- estilos propios CSS -->
<link rel="stylesheet" href="vista/css/style.propio.css">


<!-- bootstrap JS -->
<script src="vista/js/bootstrap.js"></script>

<body>
<div class="container">
	<?php 

		if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] =="ok") {

			echo '<div class="wrapper">';

			include "modulos/head.php";//incluyo el archivo head que tiene el menu

			if(isset($_GET["ruta"])){
				if ($_GET["ruta"] == "head" ||
					$_GET["ruta"] == "changePassword" ||
					$_GET["ruta"] == "logout" ) {

				include "modulos/".$_GET["ruta"].".php";//incluyo a $_GET["ruta"] para que me traiga el archivo que le paso por variable get
				}
			} 

			echo'</div>';
		}else{
			//include "modulos/inicio.php";//invluyo el modulo login si $_SESSION es != ok 
			if(isset($_GET["ruta"])){
				if ($_GET["ruta"] == "inicio" ||
					$_GET["ruta"] == "register" ||
					$_GET["ruta"] == "signin" ||
					$_GET["ruta"] == "logout" ) {

				include "modulos/".$_GET["ruta"].".php";//incluyo a $_GET["ruta"] para que me traiga el archivo que le paso por variable get
				}else{
					include "modulos/404.php";
				}
			}else{
				include "modulos/inicio.php";
			} 
		}
		?>
</div>
<!-- ./wrapper -->


	

</div>
</body>
</html>