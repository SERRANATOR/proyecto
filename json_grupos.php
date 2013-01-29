<?php
$nombre=$_POST['g'];

$sql="SELECT id, nombre, descripcion, id_estilo, id_usu, id_noticia, id_evento, id_disco FROM grupo";

$db;

$db=new PDO("mysql:host=localhost;dbname=proyecto", "root", "root");

$data=array();

$i=0;

$consulta=$db->query($sql);

	foreach($consulta as $row){
		$data[$i]['id']=$row['id'];
		$data[$i]['nombre']=$row['nombre'];
		$data[$i]['descripcion']=$row['descripcion'];
		$data[$i]['id_estilo']=$row['id_estilo'];
		$data[$i]['id_usu']=$row['id_usu'];
		$data[$i]['id_noticia']=$row['id_noticia'];
		$data[$i]['id_evento']=$row['id_evento'];
		$data[$i]['id_disco']=$row['id_disco'];
	}
	
	echo json_encode($data);
?>