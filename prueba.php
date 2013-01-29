<?php

require 'C_Eventos.php';


//atrib
$nombre_evento='rock';
$nombre_grupo=10;
$descripcion='';
$latitud=9;
$longitud=9;
$fecha='2012-01-01';
//$anno=2000;


//public
$obj=new C_Eventos();

$obj->nombre_evento=$nombre_evento;
$obj->nombre_grupo=$nombre_grupo;
$obj->descripcion=$descripcion;
$obj->latitud=$latitud;
$obj->longitud=$longitud;
$obj->fecha=$fecha;
//$obj->anno=$anno;


$obj->BorraEventos();


/*
//static
$res=C_Estilo::VerEstilos();
?><br>  nombre:  <?php echo  $res[0]->nombre;
?><br>  id grupo:  <?php echo  $res[0]->id_grupo;

?><br>  nombre:  <?php echo  $res[1]->nombre;
?><br>  id grupo:  <?php echo  $res[1]->id_grupo;*/



/*$mierda=C_Canciones::CancionesPorDisco($id_disco);
?><br>  Id_Disco:  <?php echo  $mierda[0]->id_disco;
?><br>  Nombre:  <?php echo  $mierda[0]->nombre;
?><br>  Url:  <?php echo  $mierda[0]->url;*/



?>