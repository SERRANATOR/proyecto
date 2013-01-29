<?php
$nombre=$_POST['e'];

$sql="SELECT id, nombre, id_grupo FROM estilo";

$db;

$db=new PDO("mysql:host=localhost;dbname=proyecto", "root", "root");

$data=array();

$i=0;

$consulta=$db->query($sql);

	foreach($consulta as $row){
		$data[$i]['id']=$row['id'];
		$data[$i]['nombre']=$row['nombre'];
		$data[$i]['id_grupo']=$row['id_grupo'];
	}
	
	echo json_encode($data);
?>