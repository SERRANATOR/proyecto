<?php

class C_Grupo{
	
	public $nombre;
	public $descripcion;
	public $id_estilo;
	public $id_usu;
	public $id_noticia;
	public $id_evento;
	public $id_disco;
	static public $db;
	
	public function C_Grupo($nom="", $des="", $ides="", $idus="", $idno="", $idev="", $iddi=""){
		$this->nombre=$nom;
		$this->descripcion=$des;
		$this->id_estilo=$ides;
		$this->id_usu=$idus;
		$this->id_noticia=$idno;
		$this->id_evento=$idev;
		$this->id_disco=$iddi;
		self::$db=new PDO("mysql:host=localhost;dbname=proyecto", "root", "root");
		
	}
	
	
	public function AltaGrupo(){
		$sql=('INSERT INTO grupo (nombre, descripcion, id_estilo, id_usu, id_noticia, id_evento, id_disco) VALUES ("'.$this->nombre.'", "'.$this->descripcion.'", "'.$this->id_estilo.'", "'.$this->id_usu.'", "'.$this->id_noticia.'", "'.$this->id_evento.'", "'.$this->id_disco.'")');
		
		$consult= self::$db->prepare($sql);
		$consult->execute();
	} 
	
	public function BajaGrupo(){
		$sql=('DELETE from grupo where nombre="'.$this->nombre.'"');
		
		$consult= self::$db->prepare($sql);
		$consult->execute();
		
	}
	
	public function ModGrupo(){
		$sql=('UPDATE grupo SET nombre="'.$this->nombre.'", descripcion="'.$this->descripcion.'", id_estilo="'.$this->id_estilo.'", id_usu="'.$this->id_usu.'", id_noticia="'.$this->id_noticia.'", id_evento="'.$this->id_evento.'", id_disco="'.$this->id_disco.'" Where nombre="'.$this->nombre.'"');
		echo $sql;
		$consult= self::$db->prepare($sql);
		$consult->execute();
	}
	
	
	public static function VerDiscografia($nombre){
		
		self::$db = new PDO('mysql:host=localhost;dbname=proyecto', 'root', 'root');
		
		$arr = array();
		
		$sql=('SELECT * FROM discos where nombre_grupo="'.$this->nombre.'"');
		echo $sql;
		$consult=self::$db->prepare($sql);
		$consult=self::$db->query($sql);
		 
		foreach ($consult as $row){
		
			$discreturn=new C_Grupo($row['id'], $row['nombre'], $row['nombre_grupo'], $row['anno']);
			$arr[] = $disreturn;
		}
		
		
		return $arr;
		
	}
	
	public function setNombre($nombre){
		$this->nombre=$nombre;
	}
	
	public function setDescripcion($descripcion){
		$this->descripcion=$descripcion;
	}
	
	public function setIdEstilo($id_estilo){
		$this->id_estilo=$id_estilo;
	}
	
	public function setIdUsu($id_usu){
		$this->id_usu=$id_usu;
	}
	
	public function setIdNoticia($id_noticia){
		$this->id_noticia=$id_noticia;
	}
	
	public function setIdEvento($id_evento){
		$this->id_evento=$id_evento;
	}
	
	public function setIdDisco($id_disco){
		$this->id_disco=$id_disco;
	}
	
	public function getNombre(){
		return $this->nombre;
	}
	
	public function getDescripcion(){
		return $this->descripcion;
	}
	
	public function getIdEstilo(){
		return $this->id_estilo;
	}
	
	public function getIdUsu(){
		return $this->id_usu;
	}
	
	public function getIdNoticia(){
		return $this->id_noticia;
	}
	
	public function getIdEvento(){
		return $this->id_evento;
	}
	
	public function getIdDisco(){
		return $this->id_disco;
	}
}
?>