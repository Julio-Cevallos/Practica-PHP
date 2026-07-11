<?php
	//recibe.php
  /*
 	if ( $_GET["nombre"] || $_GET["menu"] ) {
		echo "Bienvenido ". $_GET['nombre']. ".<br>";
        echo "Hoy deseas desayunar " . $_GET['menu'] . ".";
  	}
  */
?>

<!DOCTYPE html>
<html>
  <body>

    <?php

      //include control.php
      //require control.php
      //include_once control.php
      //require_once control.php
      $a= 0;
      $b= 0;

      for($i= 0; $i<5 ; $i++){
        $a+=10;
        $b+=5;
      }
      echo '<strong>Lazo for</strong><br>';
      echo ("Valor final: a = $a y b= $b<br>");

      $i= 0;
      while($i <10){
        $i++;
        if($i == 3) break;
      }
      echo "<strong>Bucle while</strong><br>";
      echo "Valor de <strong>i= $i</strong><br>";

      echo "<strong>Do while</strong><br>";
      $i= 0;
      $num= 0;

      do{
      	$i++;
      }
      while($i <10);
      echo "Valor de i= $i<br>";

      echo '<strong>Iterando Array</strong><br>';
      $array= array(1,2,3,4,5);
      foreach($array as $value){
      	echo "Valor iterado: $value<br>";
      }
      echo $array;
      echo "<br>";
      echo var_dump($array);
    ?>
    
    <form action="recibe.php" method="GET">
      <label for="nombre">Escribe tu nombre</label><br>
      <input type="text" id="nombre" name="nombre"><br>
      <label for="menu">Escribe el menu</label><br>
      <input type="text" id="menu" name="menu">
      <input type="submit"/>
    </form>
  </body>
</html>