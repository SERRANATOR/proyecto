<?php
$nombre=$_POST['c'];

$sql="SELECT nombre, id_disco, url FROM canciones";

$db;

$db=new PDO("mysql:host=localhost;dbname=proyecto", "root", "root");

$data=array();

$i=0;

$consulta=$db->query($sql);

	foreach($consulta as $row){
		$data[$i]['nombre']=$row['nombre'];
		$data[$i]['id_disco']=$row['id_disco'];
		$data[$i]['url']=$row['url'];
	}
	
	echo json_encode($data);
?>