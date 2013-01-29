<?php
class C_GrupoEstilo{
	
	public $id_grupo;
	public $id_estilo;
	public $nom_estilo;
	static public $db;
	
	
	public function C_GrupoEstilo(){
		
		$this->id_grupo=$id_grupo;
		$this->id_estilo=$id_estilo;
		$this->nom_estilo=$nom_estilo;
		self::$db=new PDO("mysql:host=localhost;dbname=proyecto", "root", "root");
		
	}
	
	
	public function AsignaEstiloGrupo(){
		
		$sql='INSERT INTO estilogrupo (id_grupo, id_estilo, nom_estilo) VALUES ('.$this->id_grupo.', '.$this->id_estilo.', "'.$this->nom_estilo.'");';
		
		$consult= self::$db->prepare($sql);
		$consult->execute();
	}
	
	//Nooo funciona
	public function ModEstiloGrupo(){
		
		$sql='UPDATE estilogrupo SET id_grupo="'.$this->id_grupo.'", id_estilo="'.$this->id_estilo.'", nom_estilo="'.$this->nom_estilo.'" where id_grupo="'.$this->id_grupo.'";';
		echo $sql;
		$con=self::$db->prepare($sql);
		$con=execute();
		
	}
	
	public function EliminarEstiloGrupo(){
		
		$sql='DELETE from estilogrupo Where id_grupo="'.$this->id_grupo.'"';
		
		$con=self::$db->prepare($sql);
		$con->execute();
		
	}
	
	public function setIdGrupo($id_grupo){
		$this->id_grupo=$id_grupo;
	}
	
	public function setIdEstilo($id_estilo){
		$this->id_estilo=$id_estilo;
	}
	
	public function setNomEstilo($nom_estilo){
		$this->nom_estilo=$nom_estilo;
	}
	
	public function getIdGrupo(){
		return $this->id_grupo;
	}
	
	public function getIdEstilo(){
		return $this->id_estilo;
	}
	
	public function IdEstilo(){
		return $this->id_estilo;
	}
	
}
?>