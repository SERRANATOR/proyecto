<?php
$nombre=$_POST['n'];

$sql="SELECT id, id_grupo, descripcion, fecha FROM noticias";

$db;

$db=new PDO("mysql:host=localhost;dbname=proyecto", "root", "root");

$data=array();

$i=0;

$consulta=$db->query($sql);

	foreach($consulta as $row){
		$data[$i]['id']=$row['id'];
		$data[$i]['id_grupo']=$row['id_grupo'];
		$data[$i]['descripcion']=$row['descripcion'];
	}
	
	echo json_encode($data);
?>