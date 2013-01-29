<?php
$nombre=$_POST['u'];

$sql="SELECT nick, pass, correo, id_grupo FROM usuario";

$db;

$db=new PDO("mysql:host=localhost;dbname=proyecto", "root", "root");

$data=array();

$i=0;

$consulta=$db->query($sql);

	foreach($consulta as $row){
		$data[$i]['nick']=$row['nick'];
		$data[$i]['pass']=$row['pass'];
		$data[$i]['correo']=$row['correro'];
		$data[$i]['id_grupo']=$row['id_grupo'];
	}
	
	echo json_encode($data);
?>