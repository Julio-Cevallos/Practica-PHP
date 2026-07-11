<?php
	//recibe.php
    
 	if ( $_GET["nombre"] || $_GET["menu"] ) {
		echo "Bienvenido ". $_GET['nombre']. ".<br>";
        echo "Hoy deseas desayunar " . $_GET['menu'] . ".";
  	}
    
?>