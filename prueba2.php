<?php

require 'C_Canciones.php';


//atrib
$nombre='final';
$id_disco=2;
$url='www.final.com';
$anno=1999;


//public
$obj=new C_Canciones();

$obj->nombre=$nombre;
$obj->id_disco=$id_disco;
$obj->url=$url;


$obj->BorrarCancion();



//static
$mierda=C_Canciones::VideosPorDisco($id_disco);
?><br>  Id_Disco:  <?php echo  $mierda[1]->id_disco;
?><br>  Nombre:  <?php echo  $mierda[1]->nombre;
?><br>  Url:  <?php echo  $mierda[1]->url;


$mierda=C_Canciones::CancionesPorDisco($id_disco);
?><br>  Id_Disco:  <?php echo  $mierda[0]->id_disco;
?><br>  Nombre:  <?php echo  $mierda[0]->nombre;
?><br>  Url:  <?php echo  $mierda[0]->url;



?>