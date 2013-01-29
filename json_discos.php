<?php
$nombre=$_POST['d'];

$sql="SELECT id, nombre, nombre_grupo, anno FROM discos";

$db;

$db=new PDO("mysql:host=localhost;dbname=proyecto", "root", "root");

$data=array();

$i=0;

$consulta=$db->query($sql);

	foreach($consulta as $row){
		$data[$i]['id']=$row['id'];
		$data[$i]['nombre_grupo']=$row['nombre_grupo'];
		$data[$i]['anno']=$row['anno'];
	}
	
	echo json_encode($data);
?>