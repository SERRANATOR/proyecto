<?php
$nombre=$_POST['ge'];

$sql="SELECT id_grupo, id_estilo, nom_estilo FROM estilogrupo";

$db;

$db=new PDO("mysql:host=localhost;dbname=proyecto", "root", "root");

$data=array();

$i=0;

$consulta=$db->query($sql);

	foreach($consulta as $row){
		$data[$i]['id_grupo']=$row['id_grupo'];
		$data[$i]['id_estilo']=$row['id_estilo'];
		$data[$i]['nom_estilo']=$row['nom_estilo'];
	}
	
	echo json_encode($data);
?>