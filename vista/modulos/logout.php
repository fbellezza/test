<?php

//Removemos sesión.
session_unset();
//Destruimos sesión.
session_destroy(); 

echo '<script>

	window.location = "inicio";

</script>';