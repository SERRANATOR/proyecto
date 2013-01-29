<?php
$nombre=$_POST['ev'];

$sql="SELECT id, descripcion, nombre_grupo, latitud, longitud, nombre_evento, fecha FROM eventos";

$db;

$db=new PDO("mysql:host=localhost;dbname=proyecto", "root", "root");

$data=array();

$i=0;

$consulta=$db->query($sql);

	foreach($consulta as $row){
		$data[$i]['id']=$row['id'];
		$data[$i]['descripcion']=$row['descripcion'];
		$data[$i]['nombre_grupo']=$row['nombre_grupo'];
		$data[$i]['latitud']=$row['latitud'];
		$data[$i]['longitud']=$row['longitud'];
		$data[$i]['nombre_evento']=$row['nombre_evento'];
		$data[$i]['fecha']=$row['fecha'];
	}
	
	echo json_encode($data);
?>